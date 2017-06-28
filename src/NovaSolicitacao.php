<?php

namespace Modelo\Solicitacao;

class NovaSolicitacao extends Status {

    public function aprovar(): \Modelo\Solicitacao\Status {
        throw new IllegalStateException("Não é possível aprovar um abono de faltas que ainda não foi solicitado.");
    }

    public function recusar(): \Modelo\Solicitacao\Status {
        throw new IllegalStateException("Não é possível recusar um abono de faltas que ainda não foi solicitado.");
    }

    public function retornar(): \Modelo\Solicitacao\Status {
        throw new IllegalStateException("Não é possível retornar um abono de faltas que ainda não foi solicitado.");
    }

    public function solicitar(): \Modelo\Solicitacao\Status {

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

}
