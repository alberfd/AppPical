<?php

namespace SecretariaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class SocioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text')
            ->add('apellidos', 'text')
            ->add('email', 'email')
            ->add('direccion')
            ->add('poblacion')
            ->add('provincia')
            ->add('cp')
            ->add('numero_cuenta')
            ->add('fecha_nacimiento', 'birthday')  
            ->add('tipo_socio', 'choice', array('choices' => array('SOCIO' => 'Socio',
            	'SOCIO_NUMERO' => 'Socio de numero'), 'placeholder' => 'Tipo de socio'))
            ->add('alta', CheckboxType::class )
            ->add('escalas')
            ->add('Guardar', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SecretariaBundle\Entity\Socio'
        ));
    }
}
