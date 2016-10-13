<?php

namespace SecretariaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class FiltroSocioType extends AbstractType
{

	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('nombre')
		->add('apellidos')
		->add('escalas', EntityType::class, array(
				'class' => 'SecretariaBundle:Escala',
				'placeholder' => 'Choose an option'
		))
		->add('alta', CheckboxType::class, array('data' => true))
		->add('Buscar', 'submit', array('label' => 'Buscar'))
		;
	}
	
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SecretariaBundle\Entity\FiltroSocio'
        ));
    }
}
