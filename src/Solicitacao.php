<?php declare(strict_types=1);

namespace Modelo;

class Solicitacao {

    /**
     * Funcionário
     * @var \Modelo\Funcionario
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
     * @var \Modelo\Status  
     */
    private $status;

    /**
     *
     * @var \Modelo\TipoDeSolicitacao 
     */
    private $tipo;
    
    public function __construct() {
        $this->status = new NovaSolicitacao();
    }

    public function getFuncionario(): \Modelo\Funcionario {
        return $this->funcionario;
    }

    public function getInicio(): \Datetime {
        return $this->inicio;
    }

    public function getTermino(): \Datetime {
        return $this->termino;
    }

    public function getMotivo() {
        return $this->motivo;
    }

    public function getObservacao() {
        return $this->observacao;
    }

    public function getStatus(): \Modelo\Status {
        return $this->status;
    }

    public function getTipo(): \Modelo\TipoDeSolicitacao {
        return $this->tipo;
    }

    public function setFuncionario(\Modelo\Funcionario $funcionario) {
        $this->funcionario = $funcionario;
        return $this;
    }

    public function setInicio(\Datetime $inicio) {
        $this->inicio = $inicio;
        return $this;
    }

    public function setTermino(\Datetime $termino) {
        $this->termino = $termino;
        return $this;
    }

    public function setMotivo($motivo) {
        $this->motivo = $motivo;
        return $this;
    }

    public function setObservacao($observacao) {
        $this->observacao = $observacao;
        return $this;
    }

    public function setStatus(\Modelo\Status $status) {
        $this->status = $status;
        return $this;
    }

    public function setTipo(\Modelo\TipoDeSolicitacao $tipo) {
        $this->tipo = $tipo;
        return $this;
    }


}
