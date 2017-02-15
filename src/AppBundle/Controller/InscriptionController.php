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
                
                $client= new \AppBundle\Entity\Utilisateur();
                $client->setIdentifiant($dto->getIdentifiant());
                $client->setNom($dto->getNom());
                $client->setPrenom($dto->getPrenom());
                $client->setMdp($dto->getMdp());
                
                $client->setNumVoie($dto->getNumVoie());
                $client->setCp($dto->getCp());
                $client->setVille($dto->getVille());
                $client->setEmail($dto->getEmail());
                $client->setTel($dto->getTel());
                $client->setRole($dto->getRole());
                $em= $this->getDoctrine()->getManager();
                $em->persist($client);
                $em->flush();
                
                return $this->render('AppBundle:ListeCoursesClient:liste_courses_clients.html.twig');
                
            }
        return $this->render('AppBundle:Inscription:inscription.html.twig', array(
            "monForm"=>$form->createView()
            // ...
        ));
    }

}
