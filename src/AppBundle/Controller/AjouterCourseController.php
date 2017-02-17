<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AjouterCourseController extends Controller
{
    /**
     * @Route("/AjouterCourse")
     */
    public function AjouterCourseAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $dto=new \AppBundle\Entity\Course;
        $form= $this->createForm(\AppBundle\Form\AjouterCourseType::class, $dto);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
           
         // $sessionClient = $request->getSession()->get('client');  
          $client= new \AppBundle\Entity\Course();
          $client->setPdeLivraison($dto->getPdeLivraison());
          $client->setPdeRetrait($dto->getPdeRetrait());        
          $client->setEtat('libre');
          //$client->setClient($sessionClient);
          
          $em= $this->getDoctrine()->getManager();
          $em->persist($client);
          $em->flush();
                
              return $this->redirectToRoute('ListeCoursesClients');  
            
        }
        return $this->render('AppBundle:AjouterCourse:ajouter_course.html.twig', array(
            "monForm"=>$form->createView()
        ));
        

}
}