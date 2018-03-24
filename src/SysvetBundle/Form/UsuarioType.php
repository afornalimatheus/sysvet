<?php

namespace SysvetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UsuarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nome')
                ->add('roles', ChoiceType::class, array(
                    'choices' => array(
                        'Usuário' => "ROLE_USER",
                        'Administrador' => "ROLE_ADMIN",
                        'Super Administrador' => "ROLE_ADMIN",
                        'Nenhum' => NULL,
                    ),
                ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SysvetBundle\Entity\Usuario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'sysvetbundle_usuario';
    }

    public function getParent() {
        
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

}
