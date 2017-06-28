<?php

namespace Modelo\Solicitacao;

use Modelo\Solicitacao\ {
    Exceptions\IllegalStateException,
    Interfaces\IStatus
};

class NovaSolicitacao extends Status {

    public function aprovar(): IStatus {
        throw new IllegalStateException("Não é possível aprovar um abono de faltas que ainda não foi solicitado.");
    }

    public function recusar(): IStatus {
        throw new IllegalStateException("Não é possível recusar um abono de faltas que ainda não foi solicitado.");
    }

    public function retornar(string $observacao): IStatus {
        throw new IllegalStateException("Não é possível retornar um abono de faltas que ainda não foi solicitado.");
    }

    public function solicitar(): IStatus {

        if ($this->getSolicitacao()->getTipo()->getTipo() === TipoDeSolicitacao::ATESTADO_MEDICO || $this->getSolicitacao()->getTipo()->getTipo() === TipoDeSolicitacao::PROBLEMA_PE) {
            $this->getSolicitacao()->setStatus(new AguardandoRh());
        } else {
            $this->getSolicitacao()->setStatus(new AguardandoChefia());
        }
        return $this;
    }

    public function __toString(): string {
        return "Nova Solicitação";
    }

    public function cancelar(): IStatus {
        throw new IllegalStateException("Não é possível cancelar um abono de faltas que ainda não foi solicitado.");
    }

}
