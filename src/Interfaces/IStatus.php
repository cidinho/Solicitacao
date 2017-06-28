<?php

namespace Modelo\Solicitacao\Interfaces;

interface IStatus {

    /**
     * Solicita a mudança de status
     * @return self Próprio Objeto para Encadeamento
     */
    public function solicitar(): self;

    /**
     * Aprova a mudança de status
     * @return self Próprio Objeto para Encadeamento
     */
    public function aprovar(): self;

    /**
     * Recusa a mudança de status
     * @return self Próprio Objeto para Encadeamento
     */
    public function recusar(): self;

    /**
     * Retorna a mudança de status
     * @return self Próprio Objeto para Encadeamento
     */
    public function retornar(string $observacao): self;
    /**
     * Cancelar a mudança de status
     * @return self Próprio Objeto para Encadeamento
     */
    public function cancelar(): self;
}
