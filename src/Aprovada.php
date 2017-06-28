<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Modelo\Solicitacao;

use Modelo\Solicitacao\{
    Exceptions\IllegalStateException,
    Interfaces\IStatus
};

/**
 * Description of Aprovada
 *
 * @author alcides.bezerra
 */
class Aprovada extends Status {

    public function __toString(): string {
        return "Aprovada";
    }

    public function aprovar(): IStatus {
        throw new IllegalStateException("Não é possível aprovar uma solicitação de abono de faltas que já foi aprovada.");
    }

    public function recusar(): IStatus {
        throw new IllegalStateException("Não é possível recusar uma solicitação de abono de faltas que já foi aprovada.");
    }

    public function solicitar(): IStatus {
        throw new IllegalStateException("Não é possível solicitar um abono de faltas que já foi solicitado.");
    }

    public function cancelar(): IStatus {
        throw new IllegalStateException("Não é possível cancelar uma solicitação de abono de faltas que já foi aprovada.");
    }

    public function retornar(string $observacao): IStatus {
        $this->getSolicitacao()->setStatus(new AguardandoRh());
        return $this;
    }

}
