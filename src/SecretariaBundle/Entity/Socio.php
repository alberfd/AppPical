<?php

namespace SecretariaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\SecurityExtraBundle\Security\Util\String;
use \DateTime;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Socio
 *
 * @ORM\Table(name="socios")
 * @ORM\Entity(repositoryClass="SecretariaBundle\Entity\SocioRepository")
 * @UniqueEntity("email")
 */
class Socio
{
	
	const MAX_EDAD_INFANTIL = 14;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=true)
     * @Assert\NotBlank
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=200, nullable=true)
     * @Assert\NotBlank
     */
    private $apellidos;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     * @Assert\NotBlank
     * @Assert\Email
     */
    private $email;
    
    /**
     * @var string
     * @ORM\Column(name="direccion", type="string", length=500, nullable=true)
     * @Assert\NotBlank
     */
    private $direccion;
    
    /**
     * @var String
     * @ORM\Column(name="pobacion", type="string", length=100, nullable=true)
     * @Assert\NotBlank
     */
    private $poblacion;
    
    /**
     * @var String
     * @ORM\Column(name="provincia", type="string", length=100, nullable=true)
     * @Assert\NotBlank
     */
    private $provincia;
    
    /**
     * @var integer
     * @ORM\Column(name="cp", type="string", length=100, nullable=true)
     * @Assert\NotBlank
     * @Assert\Type("int")
     */
    private $cp;
    
    /**
     * @var String
     * @ORM\Column(name="numero_cuenta", type="string", length=200, nullable=true)
     * @Assert\NotBlank
     */
    private $numero_cuenta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fecha_nacimiento;
    
    /**
     * @var String
     * @ORM\Column(name="url_foto", type="string", length=200, nullable=true)
     * @Assert\Date
     */
    private $url_foto;

    /**
     * 
     * @ORM\ManyToMany(targetEntity="Escala", inversedBy="socios", cascade={"persist"}, fetch="EXTRA_LAZY")
     * @ORM\JoinTable(name="socios_escalas",
     * 		joinColumns={@ORM\JoinColumn(name="id_socio", referencedColumnName="id")},
     * 		inverseJoinColumns={@ORM\JoinColumn(name="id_escala", referencedColumnName="id")})
     */
    private $escalas;
    
    
    /**
     * @ORM\Column(name="tipo_socio", type="string", columnDefinition="enum('SOCIO', 'SOCIO_NUMERO','PRESIDENTE','VICEPRESIDENTE','TESORERO','SECRETARIO')"
     * , nullable=true)
     * 
     */
    private $tipo_socio;
    
    /**
     * @var boolean
     * @ORM\Column(name="alta", type="boolean", nullable=true)
     * @Assert\Type("boolean")
     */
    private $alta;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Socio
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Socio
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }
    
    public function setEmail($email){
    	$this->email = $email;
    	
    	return $this;
    }
    
    public function getEmail(){
    	return $this->email;
    }
    
    public function setDireccion($direccion){
    	$this->direccion = $direccion;
    	
    	return $this;
    }
    
    public function getDireccion(){
    	return $this->direccion;
    }
    
    public function setPoblacion($poblacion){
    	$this->poblacion = $poblacion;
    	
    	return $this;
    }
    
    public function getPoblacion(){
    	return $this->poblacion;
    }
    
	public function setProvincia($provincia){
    	$this->provincia = $provincia;
    	
    	return $this;
    }
    
    public function getProvincia(){
    	return $this->provincia;
    }
    
    public function setCP($cp){
    	$this->cp = $cp;
    	 
    	return $this;
    }
    
    public function getCP(){
    	return $this->cp;
    }
    
    public function setNumeroCuenta($numeroCuenta){
    	$this->numero_cuenta = $numeroCuenta;
    
    	return $this;
    }
    
    public function getNumeroCuenta(){
    	return $this->numero_cuenta;
    }
    
    
    

    /**
     * Set fecha_nacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Socio
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fecha_nacimiento = $fechaNacimiento;
    
        return $this;
    }

    /**
     * Get fecha_nacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * Set escalas
     *
     * @param \stdClass $escalas
     * @return Socio
     */
    public function setEscalas($escalas)
    {
        $this->escalas = $escalas;
    
        return $this;
    }

    /**
     * Get escalas
     *
     * @return \stdClass 
     */
    public function getEscalas()
    {
        return $this->escalas;
    }
    
    /**
     * Set Tipo Socio
     *
     * @param string $escalas
     * @return Socio
     */
    public function setTipoSocio($tipo)
    {
    	$this->tipo_socio = $tipo;
    
    	return $this;
    }
    
    /**
     * Get Tipo Socio
     *
     * @return string
     */
    public function getTipoSocio()
    {
    	return $this->tipo_socio;
    }
    
    /**
     * Set Alta
     *
     * @param string $alta
     * @return boolean
     */
    public function setAlta($alta)
    {
    	$this->alta = $alta;
    
    	return $this;
    }
    
    /**
     * Get Alta
     *
     * @return boolean
     */
    public function getAlta()
    {
    	return $this->alta;
    }
    
    
    
    public function esInfantil(){
    	$fechaActual = new DateTime();
    	$resta = $fechaActual->diff($this->fecha_nacimiento);
    	return $resta->y <= self::MAX_EDAD_INFANTIL;
    }
}
