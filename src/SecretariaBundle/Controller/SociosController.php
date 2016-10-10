<?php

namespace SecretariaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use SecretariaBundle\Entity\Socio;
use SecretariaBundle\Form\SocioType;


class SociosController extends Controller
{
    public function indexAction()
    {
    	
        $em = $this->getDoctrine()->getManager();
    	
    	$socios = $em->getRepository('SecretariaBundle:Socio')->findAll();
    	
    	    	            
    	return $this->render('SecretariaBundle:Default:index.html.twig', array('socios' => $socios));
        
        
    }
    
    public function editAction($idSocio){
    	return new Response("Editando al socio " . $idSocio);
    }
    
    public function viewAction($idSocio){
    	$em = $this->getDoctrine()->getManager();
    	
    	$socio = $em->getRepository('SecretariaBundle:Socio')->find($idSocio);
    	
    	$res = "Usuario: " . $socio->getNombre() . " " . $socio->getPoblacion() . " con escalas : <br>";
    	
    	foreach($socio->getEscalas() as $escala){
    		$res .= $escala->getNombreEscala() . "<br>";
    	}
    	return new Response($res);
    	
    	
    }
    
    public function form_addAction(){
    	
    	$socio = new Socio();
    	$form = $this->createCreateForm($socio);
    	
    	
    	
    	return $this->render('SecretariaBundle:Default:addSocio.html.twig', array('form' => $form->createView()));
    }
    
    private function createCreateForm(Socio $socio){
    	$form = $this->createForm(new SocioType(), $socio, 
    			array('action' => $this->generateUrl('pical_secretaria_socio_add'),
    					'method' => 'POST'
    			));
    	
    	return $form;
    }
    
    public function addAction(Request $request){
    	
    	$socio = new Socio();
    	$form = $this->createCreateForm($socio);
    	$form->handleRequest($request);
    	
    	if($form->isValid()){
    		$em = $this->getDoctrine()->getManager();
    		
    		$em->persist($socio);
    		$em->flush();
    	
    		return $this->redirectToRoute('pical_secretaria_socios_index');
    	}
    	
    	return $this->render('SecretariaBundle:Default:addSocio.html.twig', array('form' => $form->createView()));
    	
    	
    	
    	
    	
    	
    }
    
    public function deleteAction($idSocio){
    	$em = $this->getDoctrine()->getManager();
    	
    	
    	$socio = $em->getRepository('SecretariaBundle:Socio')->find($idSocio);
    	
    	if($socio != null){
    		$em->remove($socio);
    		$em->flush();
    		$data = array('tipoMensaje' => 'success', 'mensaje' => bin2hex("Socio Eliminado correctamente"));
    	}else{
    		$data = array('tipoMensaje' => 'error', 'mensaje' => bin2hex("El socio no existe"));
    	}
    	
    	
    	
    	
    	return $this->redirectToRoute('pical_secretaria_socios_index', $data);
    	//return $this->redirect($this->generateUrl('pical_secretaria_socios_index', $data));
    }
}
