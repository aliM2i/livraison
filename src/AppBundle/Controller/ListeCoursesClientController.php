<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListeCoursesClientController extends Controller
{
    /**
     * @Route("/ListeCoursesClients", name="ListeCoursesClients")
     */
    public function ListeCoursesClientsAction(\Symfony\Component\HttpFoundation\Request $req)// le paramètre c'est ce qui se trouve dans le binding
    {
          
//        $form=$this->createForm(\AppBundle\Form\CourseType::class,$dto);
//        $form->handleRequest($req); //form binding
//        $courses= array();
//        if ($form->isSubmitted() && $form->isValid()){ //si le formulaire a été envoyé et valid
      
            $dto =new \AppBundle\Entity\Course();
            // constitution des données à afficher dans le formuaire
            $qb = new \Doctrine\ORM\QueryBuilder($this->getDoctrine()->getManager()); //Création du form builder
            $qb ->select("c")
                ->from("AppBundle:Course", "c")
                ->join ("c.livreur", "u")                
                ->andWhere ("u.role='ROLE_CLIENT'");
                //->setParameter('client', 1);
                                               
            
            // Exécute requete
            $courses = $qb->getQuery()->getResult();
            
        // retour du rendu    
        return $this->render('AppBundle:ListeCoursesClient:liste_courses_clients.html.twig', array( "courses" => $courses )) ;

        }

    }

