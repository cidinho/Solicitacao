<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Modelo\Solicitacao;

/**
 * Description of AguardandoChefia
 *
 * @author alcides.bezerra
 */
class AguardandoChefia extends Status {

    public function aprovar(): \Modelo\Solicitacao\Status {
        
    }

    public function recusar(): \Modelo\Solicitacao\Status {
        
    }

    public function retornar(): \Modelo\Solicitacao\Status {
        
    }

    public function solicitar(): \Modelo\Solicitacao\Status {
        
    }

    public function __toString(): string {
        return "Aguardando Chefia";
    }

}
