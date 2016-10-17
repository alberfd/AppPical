<?php

namespace SecretariaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class SeguridadController extends Controller
{
	
	public function form_loginAction(){
		
		$authenticationUtils = $this->get('security.authentication_utils');
		
		$error = $authenticationUtils->getLastAuthenticationError();
		
		$ultimoNombreUsuario = $authenticationUtils->getLastUsername();
		
		return $this->render('SecretariaBundle:Security:login.html.twig', array('ultimoNombreUsuario' => $ultimoNombreUsuario,
				'error' => $error
		));
	}
	
	public function loginAction(){
		return new Response("dsadsa");
	}
	
	public function homeAction(){
		return $this->redirectToRoute('pical_secretaria_socios_index');
	}
}
