<?php

namespace SecretariaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity()
 */
class Usuario implements AdvancedUserInterface, \Serializable
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
     * @ORM\Column(name="nombre_usuario", type="string", length=100)
     */
    private $nombreUsuario;
    
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     * 
     */
    private $password;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id){
    	$this->id = $id;
    	
    	return $this;
    }
    
    public function getNombreUsuario(){
    	return $this->nombreUsuario;
    }
    
    public function setNombreUsuario($nombreUsuario){
    	$this->nombreUsuario = $nombreUsuario; 
    	return $this;
    }
    
    public function getPassword(){
    	return $this->password;
    }
    
    public function setPassword($password){
    	$this->password = $password;
    	
    	return $this;
    }
    public function getRoles(){
    	return array('1' => 'admin');
    }
    
    public function getSalt(){
    	return null;
    }
    
    public function eraseCredentials(){
    	
    }
    
    /** @see \Serializable::serialize() */
    public function serialize(){
    	return serialize(array(
    			$this->id,
    			$this->nombreUsuario,
    			$this->password
    	));
    }
    
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized){
    	list(
    		$this->id,
    		$this->nombreUsuario,
    		$this->password
    		) = unserialize($serialized);
    }
    
	public function isAccountNonExpired(){
		return true;
	}
	
	public function isAccountNonLocked(){
		return true;
	}
	
	public function isCredentialsNonExpired(){
		return true;
	}
	
	public function isEnabled(){
		return true;
	}
	
	public function getUsername(){
		return $this->nombreUsuario;
	}
 
}
