<?php

namespace Modelo\Solicitacao;

class AguardandoRh extends Status {


    public function aprovar(): \Modelo\Solicitacao\Status {
        
    }

    public function recusar(): \Modelo\Solicitacao\Status {
        
    }

    public function retornar(): \Modelo\Solicitacao\Status {
        
    }

    public function solicitar(): \Modelo\Solicitacao\Status {
        
    }

    public function __toString(): string {
        return "Aguardando RH";
    }

}
