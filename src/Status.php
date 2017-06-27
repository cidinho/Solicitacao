<?php declare(strict_types=1);

namespace Modelo;

abstract class Status {

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
}
