<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Description of AjouterCourseType
 *
 * @author Formation
 */
class AjouterCourseType extends AbstractType {
     /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('PdeRetrait', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
                ->add('PdeLivraison', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
                ->add('prix', \Symfony\Component\Form\Extension\Core\Type\MoneyType::class)
                ->add('validez', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class);
    }
    
 /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Course'
        ));
    } 
}
