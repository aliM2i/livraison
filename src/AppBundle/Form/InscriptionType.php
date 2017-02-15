<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Form;

/**
 * Description of InscriptionType
 *
 * @author Formation
 */
class InscriptionType extends \Symfony\Component\Form\AbstractType{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $option){
        $builder->add("nom", Symfony\Component\Form\Extension\Core\Type\TextType::class)
                ->add("identifiant", Symfony\Component\Form\Extension\Core\Type\TextType::class)
                ->add("prenom", Symfony\Component\Form\Extension\Core\Type\TextType::class)
                ->add("mdp", Symfony\Component\Form\Extension\Core\Type\PasswordType::class)
                ->add("mdp2", Symfony\Component\Form\Extension\Core\Type\PasswordType::class)
                ->add("numVoie", \Symfony\Component\Form\Extension\Core\Type\TextareaType::class)
                ->add("cp", \Symfony\Component\Form\Extension\Core\Type\TextType::class)
                ->add("ville", \Symfony\Component\Form\Extension\Core\Type\TextType::class)
                ->add("email", \Symfony\Component\Form\Extension\Core\Type\EmailType::class)
                ->add("tel", \Symfony\Component\Form\Extension\Core\Type\TextType::class)
                ->add("role", \Symfony\Component\Form\Extension\Core\Type\CheckboxType::class);
        
    }
    //put your code here
}
