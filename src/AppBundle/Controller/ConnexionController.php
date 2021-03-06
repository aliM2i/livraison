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
                 
                if($utilisateur->getRole() == 'ROLE_LIVREUR'){
                     
                     return $this->redirectToRoute('ListeCoursesLivreur');
                     
                }elseif($utilisateur->getRole() == 'ROLE_CLIENT'){
                 
                    return $this->redirectToRoute('ListeCoursesClients');       
                }else{
                     $request->getSession()->getFlashBag()->add('info', 'Vous êtes connecté en tant qu\'administrateur');
                     $request->getSession()->set('client', 'admin');
                     return $this->redirectToRoute('utilisateur_index');
                }   
             }else
             {
                
                    $request->getSession()->getFlashBag()->add('info', 'la connexion à échoué');
             }
             
            
        
            }
        
        return $this->render('AppBundle:Connexion:connexion.html.twig', array(
            "monForm"=>$form->createView()
            // ...
        ));
    }
    /**
     * 
     * @Route("/logout", name="deconnexion")
     * 
     */ 
    public function deconnexionAction(\Symfony\Component\HttpFoundation\Request $request) {
        
        $request->getSession()->clear();
        
        $request->getSession()->getFlashBag()->add('info', 'Vous êtes déconnecté !');
        
        return $this->redirect($this->generateUrl('app_connexion_connexion'));
        
    }
}
