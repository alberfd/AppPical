<?php
namespace SecretariaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\SecurityExtraBundle\Security\Util\String;
use \DateTime;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Filtro Socio
 * @ORM\Entity
 */
class FiltroSocio
{
	
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     *
     */
    private $apellidos;
    

    /**
     * 
     */
    private $escalas;
    
    /**
     * @var boolean
     */
    private $alta;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return FiltroSocio
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
     * @return FiltroSocio
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
    

    /**
     * Set escalas
     *
     * @param \stdClass $escalas
     * @return FiltroSocio
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
     * Set Alta
     *
     * @param string $alta
     * @return FiltroSocio
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
}
