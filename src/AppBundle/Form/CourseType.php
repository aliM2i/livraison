<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('pdeRetrait')->add('pdeLivraison')
                ->add('etat', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
                     'choices'=> array(
                        'libre'=>'libre',
                        'en cours de livraison'=>'en cours de livraison',
                        'livrée'=>'livrée',
                    )
                ))
                
                ->add('prix')
                
                ->add('client', \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, array(
                'class'         => 'AppBundle\Entity\Utilisateur',
                'query_builder' => function ($repository) { 
                    return $repository->createQueryBuilder('u')
                            ->where('u.role = :role')
                            ->setParameter('role','ROLE_CLIENT'); 
                },
                        
                'required'=>false
                ))
                        
                ->add('livreur', \Symfony\Bridge\Doctrine\Form\Type\EntityType::class, array(
                'class'         => 'AppBundle\Entity\Utilisateur',
                'query_builder' => function ($repository) { 
                    return $repository->createQueryBuilder('u')
                            ->where('u.role = :role')
                            ->setParameter('role','ROLE_LIVREUR'); 
                }, 
                'required'=>false
                ));
                
                
              
                
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

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_course';
    }

    
}
