<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListeCoursesClientController extends Controller
{
    /**
     * @Route("/ListeCoursesClients")
     */
    public function ListeCoursesClientsAction(\Symfony\Component\HttpFoundation\Request $req)// le paramètre c'est ce qui se trouve dans le binding
    {
        $dto =new \AppBundle\DTO\ListeCoursesDTO();
        $form=$this->createForm(\AppBundle\Form\FiltreType::class,$dto);
        $form->handleRequest($req); //form binding
        
         $courses= array();
         
          if ($form->isSubmitted()&& $form->isValid()){ //si le formulaire a été envoyé et valid
        
            
            $qb = new \Doctrine\ORM\QueryBuilder($this->getDoctrine()->getManager()); //Création du form builder
            $qb ->select("c")
                ->from("AppBundle:Course", "c")
                ->join ("c.utilisateur", "util");
                
            if( $dto->getClient()!=null ){
                $qb->andWhere ("util.id=:client")
                   ->andWhere ("util.role=:'client'");                              
            }
              
        
            return $this->render('AppBundle:ListeCoursesClient:liste_courses_clients.html.twig', array(
            "monFormulaire"=>$form->createView, "produits" =>$produits
        ));
        }

    }
}
