<?php

namespace SONUser\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
     */
    private $nome;
    
    /**
     * @ORM\Column(type="string")
     */
    private $email;
    
    /**
     * @ORM\Column(type="string")
     */
    private $password;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        
        return $this;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = sha1($password);
        
        return $this;
    }
}