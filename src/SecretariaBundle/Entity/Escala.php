<?php

namespace SecretariaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Escala
 *
 * @ORM\Table(name="escalas")
 * @ORM\Entity(repositoryClass="SecretariaBundle\Entity\EscalaRepository")
 */
class Escala
{
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
     * @ORM\Column(name="nombre_escala", type="string", length=100)
     * @Assert\NotBlank
     */
    private $nombre_escala;
    
    /**
     * @var string
     *
     * @ORM\Column(name="abreviatura", type="string", length=100)
     * 
     * @Assert\NotBlank
     */
    private $abreviatura;

    /**
     * 
     * @ORM\ManyToMany(targetEntity="Socio", mappedBy="escalas", cascade={"persist"}, fetch="EXTRA_LAZY")
     * 
     */
    private $socios;


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
     * Set nombre_escala
     *
     * @param string $nombreEscala
     * @return Escala
     */
    public function setNombreEscala($nombreEscala)
    {
        $this->nombre_escala = $nombreEscala;
    
        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string 
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }
    
    
    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     * @return Escala
     */
    public function setAbreviatura($abreviatura)
    {
    	$this->abreviatura = $abreviatura;
    
    	return $this;
    }
    
    /**
     * Get nombre_escala
     *
     * @return string
     */
    public function getNombreEscala()
    {
    	return $this->nombre_escala;
    }

    /**
     * Set socios
     *
     * @param array $socios
     * @return Escala
     */
    public function setSocios($socios)
    {
        $this->socios = $socios;
    
        return $this;
    }

    /**
     * Get socios
     *
     * @return array 
     */
    public function getSocios()
    {
        return $this->socios;
    }
    
    public function __toString() {
    	return $this->nombre_escala;
    }
}
