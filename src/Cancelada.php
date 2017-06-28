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
 * Description of Cancelada
 *
 * @author alcides.bezerra
 */
class Cancelada extends Status {

    public function __toString(): string {
        return "Cancelada";
    }

    public function aprovar(): IStatus {
        throw new IllegalStateException("Não é possível aprovar uma solicitação de abono de faltas que já foi cancelada.");
    }

    public function cancelar(): IStatus {
        throw new IllegalStateException("Não é possível cancelar uma solicitação de abono de faltas que já foi cancelada.");
    }

    public function recusar(): IStatus {
        throw new IllegalStateException("Não é possível recusar uma solicitação de abono de faltas que já foi cancelada.");
    }

    public function retornar(string $observacao): IStatus {
        throw new IllegalStateException("Não é possível retornar uma solicitação de abono de faltas que já foi cancelada.");
    }

    public function solicitar(): IStatus {
        throw new IllegalStateException("Não é possível solicitar um abono de faltas que já foi solicitado.");
    }

}
