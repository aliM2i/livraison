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
      
             $dto =new \AppBundle\DTO\ListeCoursesDTO();
            $id = $req->getSession()->get('client')->getId();
            // constitution des données à afficher dans le formuaire
            $qb = new \Doctrine\ORM\QueryBuilder($this->getDoctrine()->getManager()); //Création du form builder
            $qb ->select("c")
                ->from("AppBundle:Course", "c")
                ->join ("c.client", "u")                
                ->andWhere ('u.id= '.$id );;
                //->setParameter('client', 1);
                                               
            
            // Exécute requete
            $courses = $qb->getQuery()->getResult();
            
        // retour du rendu    
        return $this->render('AppBundle:ListeCoursesClient:liste_courses_clients.html.twig', array( "courses" => $courses )) ;

        }
     /**
     * @Route("/ValidationReceptionCourse/{idCmd}",name="ValidationReceptionCourse")
     */
     public function PriseCoursesLivreurAction(\Symfony\Component\HttpFoundation\Request $request, $idCmd)
    {
         $dto =new \AppBundle\Entity\Course();
            // constitution des données à afficher dans le formuaire
            $qb = new \Doctrine\ORM\QueryBuilder($this->getDoctrine()->getManager()); //Création du form builder
            //  $request->getSession()->get("client");
            //-  dump($request->getSession()->get("client"));
            // die;
            
            // Récup util
            // $id = $request->getSession()->get("client")->getId();
            $id = $request->getSession()->get('client')->getId();
            
            $client = $this->getDoctrine()->getRepository("AppBundle:Utilisateur")->find($id);
            
            // Récup cmd
            $course = $this->getDoctrine()->getRepository("AppBundle:Course")->find($idCmd);
            
            $course->setEtat('Livrée');
            $course->setClient($client);
            $client->addCourseDemandee($course);
            $this->getDoctrine()->getManager()->flush();
           
            return $this->redirectToRoute('ListeCoursesClients');
    }

    }

