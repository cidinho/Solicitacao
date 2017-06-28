<?php

namespace Modelo\Solicitacao;

abstract class Status {

    /**
     * Solicitação
     * 
     * @var \Modelo\Solicitacao\Solicitacao 
     */
    protected $solicitacao;

    /**
     * Retorna Solicitação
     * 
     * @return \Modelo\Solicitacao\Solicitacao
     */
    public function getSolicitacao(): \Modelo\Solicitacao\Solicitacao {
        return $this->solicitacao;
    }

    /**
     * Configura a Solicitação
     * 
     * @param \Modelo\Solicitacao\Solicitacao $solicitacao
     * @return \self
     */
    public function setSolicitacao(\Modelo\Solicitacao\Solicitacao $solicitacao): self {
        $this->solicitacao = $solicitacao;
        return $this;
    }

    /**
     * Solicita a mudança de status
     * @return self Próprio Objeto para Encadeamento
     */
    public abstract function solicitar(): self;

    /**
     * Aprova a mudança de status
     * @return self Próprio Objeto para Encadeamento
     */
    public abstract function aprovar(): self;

    /**
     * Recusa a mudança de status
     * @return self Próprio Objeto para Encadeamento
     */
    public abstract function recusar(): self;

    /**
     * Retorna a mudança de status
     * @return self Próprio Objeto para Encadeamento
     */
    public abstract function retornar(): self;

    /**
     * Retona o texto referente ao status
     */
    public abstract function __toString(): string;
}
