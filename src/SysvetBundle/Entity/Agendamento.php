<?php

namespace SysvetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="agendamento")
 */
class Agendamento {
    
    const STATUS_NOVO       = 'NOVO';
    const STATUS_CONFIRMADO = 'CONFIRMADO';
    const STATUS_PENDENTE   = 'PENDENTE';
    const STATUS_CANCELADO  = 'CANCELADO';
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     private $id;
     
      /**
     * @ORM\Column(type="datetime", length=100)
     */
    private $horario;
    
    /**
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     */
    private $cliente;
    
    /**
     * @ORM\ManyToOne(targetEntity="Servico")
     * @ORM\JoinColumn(name="servico_id", referencedColumnName="id")
     */
    private $servico;
    
    /**
     * @ORM\Column(type="string", length=15)
     */
    private $status;

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
     * Set horario
     *
     * @param \DateTime $horario
     *
     * @return Agendamento
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return \DateTime
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set cliente
     *
     * @param \SysvetBundle\Entity\Cliente $cliente
     *
     * @return Agendamento
     */
    public function setCliente(\SysvetBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \SysvetBundle\Entity\Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set servico
     *
     * @param \SysvetBundle\Entity\Servico $servico
     *
     * @return Agendamento
     */
    public function setServico(\SysvetBundle\Entity\Servico $servico = null)
    {
        $this->servico = $servico;

        return $this;
    }

    /**
     * Get servico
     *
     * @return \SysvetBundle\Entity\Servico
     */
    public function getServico()
    {
        return $this->servico;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Agendamento
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
