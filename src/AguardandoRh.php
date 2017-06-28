<?php

namespace Modelo\Solicitacao;

use Modelo\Solicitacao\{
    Exceptions\IllegalStateException,
    Interfaces\IStatus
};

class AguardandoRh extends Status {

    public function aprovar(): IStatus {
        $this->getSolicitacao()->setStatus(new Aprovada());
        return $this;
    }

    public function recusar(): IStatus {
        
    }

    public function retornar(string $observacao): IStatus {
        $this->getSolicitacao()
                ->setObservacao($observacao)
                ->setStatus(new AguardandoChefia);
        return $this;
    }

    public function solicitar(): IStatus {
        throw new IllegalStateException("Não é possível solicitar um abono de faltas que já foi solicitado.");
    }

    public function __toString(): string {
        return "Aguardando RH";
    }

    public function cancelar(): IStatus {
        
    }

}
