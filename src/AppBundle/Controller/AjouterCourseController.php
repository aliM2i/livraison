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
           
          
         
            
        }
        return $this->render('AppBundle:AjouterCourse:ajouter_course.html.twig', array(
            "monForm"=>$form->createView()
        ));
        

}
}