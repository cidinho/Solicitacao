<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Modelo\Solicitacao;

use Modelo\Solicitacao\ {
    Exceptions\IllegalStateException,
    Interfaces\IStatus
};

/**
 * Description of AguardandoChefia
 *
 * @author alcides.bezerra
 */
class AguardandoChefia extends Status {

    public function aprovar(): IStatus {
        $this->getSolicitacao()->setStatus(new AguardandoRh());
        return $this;
    }

    public function recusar(): IStatus {
        $this->getSolicitacao()->setStatus(new Recusada());
        return $this;
    }

    public function retornar(string $observacao): IStatus {
        throw new IllegalStateException("Não é possível retornar a solicitação na chefia imediata, apenas no setor de Recursos Humanos");
    }

    public function solicitar(): IStatus {
        throw new IllegalStateException("Não é possível solicitar um abono de faltas que já foi solicitado.");
    }

    public function __toString(): string {
        return "Aguardando Chefia";
    }

    public function cancelar(): IStatus {
        $this->getSolicitacao()->setStatus(new Cancelada());
        return $this;
    }

}
