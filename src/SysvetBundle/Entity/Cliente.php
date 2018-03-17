<?php

namespace SysvetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="clientes")
 */
class Cliente {
    
     /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "O nome deve ter pelo menos {{ limit }} caracteres.",
     *      maxMessage = "O nome deve ter no máximo  {{ limit }} caracteres."
     * )
     * @Assert\NotBlank(
     * message = "O campo não pode estar em branco!"
     * )
     */
    private $nome;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "O nome deve ter pelo menos {{ limit }} caracteres.",
     *      maxMessage = "O nome deve ter no máximo  {{ limit }} caracteres."
     * )
     * @Assert\NotBlank(
     * message = "O campo não pode estar em branco!"
     * )
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=16)
     */
    private $telefone;
    
    /**
     * @ORM\Column(type="string", length=11)
     */
    private $documento;
    
    /**
     * @ORM\Column(type="datetime", length=100)
     */
    private $dataCadastro;
    
    /**
     * @ORM\Column(type="string", length=1)
     */
    private $sexo;
    
    public function __toString() {
        return $this->nome;
    }
    
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
     * Set nome
     *
     * @param string $nome
     *
     * @return Cliente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     *
     * @return Cliente
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }
    
    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }
    
    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Cliente
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Set documento
     *
     * @param string $documento
     *
     * @return Cliente
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set dataCadastro
     *
     * @param \DateTime $dataCadastro
     *
     * @return Cliente
     */
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;

        return $this;
    }

    /**
     * Get dataCadastro
     *
     * @return \DateTime
     */
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
}
