<?php

namespace SecretariaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SecretariaBundle\Entity\Socio;
use SecretariaBundle\Form\EscalaType;
use SecretariaBundle\Entity\Escala;


class EscalasController extends Controller
{


    private function createCreateForm(Escala $escala){
    	
    	$form = $this->createForm(new EscalaType(), $escala, array('action' => $this->generateUrl('pical_secretaria_escala_add'),
    			'method' => 'POST'
    	));
    	
    	return $form;
    }
    
    public function form_addAction(){
    	$escala = new Escala();
    	 
    	$form = $this->createCreateForm($escala);
    	 
    	return $this->render('SecretariaBundle:Default:addEscala.html.twig', array('form' => $form->createView()));
    }
    
    public function addAction(Request $request){
    	 
    	$escala = new Escala();
    	$form = $this->createCreateForm($escala);
    	$form->handleRequest($request);
    	 
    	if($form->isValid()){
    		$em = $this->getDoctrine()->getManager();
    		echo "aa2" . $escala->getSocios()[0];
    		$em->persist($escala);
    		$em->flush();
    		
    		$this->addFlash(
    				'success',
    				'Escala creada correctamente'
    		);
    		 
    		return $this->redirectToRoute('pical_secretaria_socios_index');
    	}
    	 
    	return $this->render('SecretariaBundle:Default:addEscala.html.twig', array('form' => $form->createView()));
 
    }
}
