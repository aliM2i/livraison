<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('role', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class , array(
                    'choices'=> array(
                        'admin'=>'ROLE_ADMIN',
                        'client'=>'ROLE_CLIENT',
                        'livreur'=>'ROLE_LIVREUR'
                    )
                ))
                ->add('nom')
                ->add('identifiant')->add('prenom')->add('mdp')->add('numVoie')->add('cp')->add('ville')->add('email')->add('tel')
                        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Utilisateur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_utilisateur';
    }


}
