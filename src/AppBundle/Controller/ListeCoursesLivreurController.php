<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListeCoursesLivreurController extends Controller
{
    /**
     * @Route("/ListeCoursesLivreur")
     */
     public function ListeCoursesClientsAction(\Symfony\Component\HttpFoundation\Request $req)
    {
         $dto =new \AppBundle\Entity\Course();
            // constitution des données à afficher dans le formuaire
            $qb = new \Doctrine\ORM\QueryBuilder($this->getDoctrine()->getManager()); //Création du form builder
            $qb ->select("c")
                ->from("AppBundle:Course", "c")
                ->join ("c.livreur", "u")                
                ->andWhere ("u.role='livreur'");
                //->setParameter('client', 1);
            
            // Exécute requete
            $courses = $qb->getQuery()->getResult();
            
        // retour du rendu    
        return $this->render('AppBundle:ListeCoursesLivreur:liste_courses_livreur.html.twig', array( "courses" => $courses )) ;          
                
    }

}
