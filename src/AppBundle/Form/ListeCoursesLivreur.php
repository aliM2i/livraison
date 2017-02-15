<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Form;

/**
 * Description of ListeCoursesLivreur
 *
 * @author Formation
 */
class ListeCoursesLivreur extends \Symfony\Component\Form\AbstractType {
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        $builder->add("submit", \Symfony\Component\Form\Extension\Core\Type\SubmitType::class)
                ->add("$client", \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, array("class"=>"AppBundle:Course","required"=>FALSE))
                ->add("$livreur", \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, array("class"=>"AppBundle:Course","required"=>FALSE))        
                ->add("$pdeRetrait", \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, array("class"=>"AppBundle:Course","required"=>FALSE))       
                ->add("$pdeLivraison", \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, array("class"=>"AppBundle:Course","required"=>FALSE))    
                ->add("$etat", \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, array("class"=>"AppBundle:Course","required"=>FALSE)) 
                ->add("$prix", \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, array("class"=>"AppBundle:Course","required"=>FALSE));
                
    }
}
