<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListeCoursesLivreurController extends Controller
{
    /**
     * @Route("/ListeCoursesLivreur", name="ListeCoursesLivreur")
     */
     public function ListeCoursesClientsAction(\Symfony\Component\HttpFoundation\Request $req)
    {
        $dto =new \AppBundle\DTO\ListeCoursesDTO();
        
        $id = $req->getSession()->get('client')->getId();
        
      
        // constitution des données à afficher dans le formuaire
        $qb = new \Doctrine\ORM\QueryBuilder($this->getDoctrine()->getManager()); //Création du form builder
        $qb ->select("c")
            ->from("AppBundle:Course", "c")
            ->andWhere('c.livreur = '.$id ) // prise en charge par le livreur
            ->orWhere("c.livreur IS NULL " ); // les libres
        $courses = array();

        // Exécute requete
        $courses = $qb->getQuery()->getResult();
      
        // retour du rendu    
        return $this->render('AppBundle:ListeCoursesLivreur:liste_courses_livreur.html.twig', array( "courses" => $courses )) ;          
                
    }
    
    /**
     * @Route("/PriseCoursesLivreur/{idCmd}",name="PriseCoursesLivreur")
     */
     public function PriseCoursesLivreurAction(\Symfony\Component\HttpFoundation\Request $request, $idCmd)
    {
         $dto =new \AppBundle\Entity\Course();
            // constitution des données à afficher dans le formuaire
            $qb = new \Doctrine\ORM\QueryBuilder($this->getDoctrine()->getManager()); //Création du form builder

            // Récup util
            $id = $request->getSession()->get('client')->getId();
            $livreur = $this->getDoctrine()->getRepository("AppBundle:Utilisateur")->find($id);
            
            // Récup cmd
            $course = $this->getDoctrine()->getRepository("AppBundle:Course")->find($idCmd);
            
            $course->setEtat('en cours de livraison');
            $course->setLivreur($livreur);
            $livreur->addCourseEffectuee($course);
            $this->getDoctrine()->getManager()->flush();
           
            return $this->redirectToRoute('ListeCoursesLivreur');
    }
    
}
