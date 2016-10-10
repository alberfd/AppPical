<?php

namespace SecretariaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $nombre_escala;

    /**
     * 
     * @ORM\ManyToMany(targetEntity="Socio", mappedBy = "escalas", cascade={"persist"}, fetch="EAGER")
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
