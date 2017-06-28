<?php

namespace Modelo\Solicitacao;

use Modelo\Solicitacao\Interfaces\IStatus;

abstract class Status implements IStatus {

    /**
     * Solicitação
     * 
     * @var Solicitacao 
     */
    protected $solicitacao;

    /**
     * Retorna Solicitação
     * 
     * @return Solicitacao
     */
    public function getSolicitacao(): Solicitacao {
        return $this->solicitacao;
    }

    /**
     * Configura a Solicitação
     * 
     * @param Solicitacao $solicitacao
     * @return \self
     */
    public function setSolicitacao(Solicitacao $solicitacao): self {
        $this->solicitacao = $solicitacao;
        return $this;
    }

    /**
     * Solicita a mudança de status
     * @return self Próprio Objeto para Encadeamento
     */
    public abstract function solicitar(): IStatus;

    /**
     * Aprova a mudança de status
     * @return self Próprio Objeto para Encadeamento
     */
    public abstract function aprovar(): IStatus;

    /**
     * Recusa a mudança de status
     * @return self Próprio Objeto para Encadeamento
     */
    public abstract function recusar(): IStatus;

    /**
     * Retorna a mudança de status
     * @param string $observacao Motivo do retorno da Solicitação
     * @return self Próprio Objeto para Encadeamento
     */
    public abstract function retornar(string $observacao): IStatus;

    /**
     * Retona o texto referente ao status
     */
    public abstract function __toString(): string;
}
