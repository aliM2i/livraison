<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConnexionController extends Controller
{
    /**
     * @Route("/Connexion")
     */
    public function ConnexionAction(\Symfony\Component\HttpFoundation\Request $request)
    {
         $dto=new \AppBundle\DTO\ConnexionDTO;
        $form= $this->createForm(\AppBundle\Form\ConnexionType::class, $dto);
        $form->handleRequest($request);
        
            if($form->isSubmitted() && $form->isValid()){
                $identifiant= $form->get('identifiant')->getData();
                $mdp=$form->get('mdp')->getData();
                
                
                $em= $this->getDoctrine()->getManager();
                
                $repository=$em->getRepository('AppBundle:Utilisateur');
                
 
                $utilisateur = $repository->findOneBy(
                        array(
                            'identifiant'=>$identifiant,
                            'mdp'=>$mdp
                        ));
                        
            
                
             $nb=count($utilisateur);
             
             if($nb==1){
                 $request->getSession()->set('client', $utilisateur);
                 $request->getSession()->getFlashBag()->add('info', 'Vous êtes connecté');
                 
                 $utilisateur = new \AppBundle\Entity\Utilisateur;
                 if($utilisateur->getRole() == 'livreur'){
                     
                     return $this->redirectToRoute('app_listecourseslivreur_listecoursesclients');
                     
                 }
                 
                 return $this->redirectToRoute('app_listecoursesclient_listecoursesclients');       
                         
             }else
                 {
                 if($identifiant == 'admin' && $mdp=='admin'){
                     $request->getSession()->getFlashBag()->add('info', 'Vous êtes connecté en tant qu\'administrateur');
                     $request->getSession()->set('client', 'admin');
                 }else{
                     $request->getSession()->getFlashBag()->add('info', 'la connexion à échoué');
                 }
             }
            
        
            }
        
        return $this->render('AppBundle:Connexion:connexion.html.twig', array(
            "monForm"=>$form->createView()
            // ...
        ));
    }

}
