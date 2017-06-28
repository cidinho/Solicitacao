<?php

namespace Modelo\Solicitacao;

final class TipoDeSolicitacao{

    public const SERVICO = "A Serviço";
    public const ATESTADO_MEDICO = "Atestado Médico";
    public const LICENCA = "Licença";
    public const PROBLEMA_PE = "Problema no Ponto Eletrônico";
    public const OUTRO = "Outros";

    /**
     * Tipo
     * @var string 
     */
    private $tipo;

    public function __construct(string $tipo) {
        $this->tipo = $tipo;
    }

    /**
     * Retorna o Tipo
     * @return string
     */
    public function getTipo(): string {
        return $this->tipo;
    }

    /**
     * Configura o Tipo
     * 
     * @param string $tipo
     * @return \self
     */
    public function setTipo(string $tipo): self {
        $this->tipo = self::_create($tipo);
        return $this;
    }

    public function __toString(): string {
        return "" . $this->tipo;
    }
    
    public static final function save(){
        echo "teste";
    }

}

