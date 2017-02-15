<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class InscriptionController extends Controller
{
    /**
     * @Route("/Inscription")
     */
    public function InscriptionAction(\Symfony\Component\HttpFoundation\Request $req)
    {
        $dto=new \AppBundle\DTO\InscriptionDTO;
        $form= $this->createForm(\AppBundle\Form\InscriptionType::class, $dto);
        $form->handleRequest($req);
        
            if($form->isSubmitted() && $form->isValid()){
                
                $nom= new \AppBundle\Entity\Nom();
                $nom->setIdentifiant($dto->getIdentifiant());
                $nom->setMdp($dto->getMdp());
                
                $em= $this->getDoctrine()->getManager();
                $em->persist($nom);
                $em->flush();
            }
        return $this->render('AppBundle:Inscription:inscription.html.twig', array(
            "monForm"=>$form->createView()
            // ...
        ));
    }

}
