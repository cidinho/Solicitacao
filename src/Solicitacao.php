<?php

namespace Modelo\Solicitacao;

use Modelo\Solicitacao\Interfaces\IStatus;
use function EntitiesPHP\Repository\save;

class Solicitacao implements IStatus {
// <editor-fold defaultstate="collapsed" desc="Atributos">

    /**
     * Funcionário
     * @var Funcionario
     */
    private $funcionario;

    /**
     * Início
     * @var \Datetime
     */
    private $inicio;

    /**
     * Término
     * @var \Datetime
     */
    private $termino;

    /**
     * Motivo
     * @var string
     */
    private $motivo;

    /**
     * Observação
     * @var string
     */
    private $observacao;

    /**
     * Status
     * @var Status  
     */
    private $status;

    /**
     *
     * @var TipoDeSolicitacao 
     */
    private $tipo; // </editor-fold>

// <editor-fold defaultstate="collapsed" desc="Métodos Comuns">

    public function __construct() {
        $this->status = new NovaSolicitacao();
        $this->tipo = new TipoDeSolicitacao("");
    }

    public function getFuncionario(): Funcionario {
        return $this->funcionario;
    }

    public function getInicio(): \Datetime {
        return $this->inicio;
    }

    public function getTermino(): \Datetime {
        return $this->termino;
    }

    public function getMotivo(): string {
        return $this->motivo;
    }

    public function getObservacao(): string {
        return $this->observacao;
    }

    public function getStatus(): Status {
        return $this->status;
    }

    public function getTipo(): TipoDeSolicitacao {
        return $this->tipo;
    }

    public function setFuncionario(Funcionario $funcionario): self {
        $this->funcionario = $funcionario;
        return $this;
    }

    public function setInicio(\Datetime $inicio): self {
        $this->inicio = $inicio;
        return $this;
    }

    public function setTermino(\Datetime $termino): self {
        $this->termino = $termino;
        return $this;
    }

    public function setMotivo($motivo): self {
        $this->motivo = $motivo;
        return $this;
    }

    public function setObservacao($observacao): self {
        $this->observacao = $observacao;
        return $this;
    }

    public function setStatus(Status $status): self {
        $this->status = $status;
        return $this;
    }

    public function setTipo(TipoDeSolicitacao $tipo): self {
        $this->tipo = $tipo;
        return $this;
    }

// </editor-fold>

    public function aprovar(): IStatus {
        $this->getStatus()
                ->setSolicitacao($this)
                ->aprovar();
        save($this);
        return $this;
    }

    public function recusar(): IStatus {
        $this->getStatus()
                ->setSolicitacao($this)
                ->recusar();
        save($this);
        return $this;
    }

    public function retornar(string $observacao): IStatus {
        $this->getStatus()
                ->setSolicitacao($this)
                ->retornar($observacao);
        save($this);
        return $this;
    }

    public function solicitar(): IStatus {
        $this->getStatus()
                ->setSolicitacao($this)
                ->solicitar();
        save($this);
        return $this;
    }

    public function cancelar(): IStatus {
        $this->getStatus()
                ->setSolicitacao($this)
                ->cancelar();
        save($this);
        return $this;
    }

}
