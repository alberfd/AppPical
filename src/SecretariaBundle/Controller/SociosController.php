<?php

namespace SecretariaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use SecretariaBundle\Entity\Socio;
use SecretariaBundle\Form\SocioType;
use SecretariaBundle\Entity\FiltroSocio;
use SecretariaBundle\Form\FiltroSocioType;



class SociosController extends Controller
{
	
	
	
    public function indexAction(Request $request)
    {
    	$filtroSocio = new FiltroSocio();
    	$form = $this->createFilterForm($filtroSocio);
    	$form->handleRequest($request);
    	
    	$em = $this->getDoctrine()->getManager();
    	
    	if($form->isSubmitted()){
    		$qb = $em->createQueryBuilder();
    		
    		$params['nombre'] =  '%'.$filtroSocio->getNombre().'%';
    		$params['apellidos'] = '%'.$filtroSocio->getApellidos().'%';
    		$params['alta']	= $filtroSocio->getAlta();
    		if($filtroSocio->getEscalas() != null)
    			$params['escala'] = $filtroSocio->getEscalas()->getId();
    		
    		$q = $qb->select('s')
    		->from('SecretariaBundle:Socio' , 's');
    		if($filtroSocio->getEscalas() != null)
    			$q->innerJoin('s.escalas', 'e','WITH', 'e = :escala');
    		$q->where('s.nombre like :nombre')
    		->andWhere('s.apellidos like :apellidos')
    		->andWhere('s.alta = :alta')
    		->setParameters($params);

    		
    		 
    		$query = $qb->getQuery();
    		 
    		$socios = $query->getResult();
    	}else{
    		$socios = $em->getRepository('SecretariaBundle:Socio')->findAll(array('alta' => 1)); 
    	}    	
    	    	            
    	return $this->render('SecretariaBundle:Default:index.html.twig', array('socios' => $socios, 'form' => $form->createView()));
        
        
    }
    
    private function createFilterForm(FiltroSocio $filtroSocio){
    	$form = $this->createForm(new FiltroSocioType(), $filtroSocio, array('action' => $this->generateUrl('pical_secretaria_socios_index'
    			)));
    	
    	return $form;
    }
    
    public function form_editAction($idSocio){
    	
    	$em = $this->getDoctrine()->getManager();
    	
    	$socio = $em->getRepository('SecretariaBundle:Socio')->find($idSocio);
    	
    	if($socio == null){
    		throw $this->createNotFoundException("Socio no encontrado");
    	}
    	
    	$form = $this->createEditForm($socio);
    	
    	return $this->render('SecretariaBundle:Default:edit.html.twig', array('socio' => $socio, 'form' => $form->createView()));
    }
    
    private function createEditForm(Socio $socio){
    	$form = $this->createForm(new SocioType(), $socio, array('action' => $this->generateUrl('pical_secretaria_socio_edit',
    			array('idSocio' => $socio->getId()))));
    	
    	return $form;
    }
    
    public function editAction($idSocio, Request $request){
    	
    	$em = $this->getDoctrine()->getManager();
    	
    	$socio = $em->getRepository('SecretariaBundle:Socio')->find($idSocio);
    	
    	if($socio == null){
    		throw $this->createNotFoundException("Socio no encontrado");
    	}
    	
    	$form = $this->createEditForm($socio);
    	
    	$form->handleRequest($request);
    	
    	if($form->isSubmitted() && $form->isValid()){
    		$em->flush();
    		
    		return $this->redirectToRoute('pical_secretaria_socios_index');
    	}
    	
    	return $this->render('SecretariaBundle:Default:edit.html.twig', array('socio' => $socio, 'form' => $form->createView()));
    	
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
