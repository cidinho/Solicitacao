<?php

namespace Modelo\Solicitacao;

class Funcionario {

    /**
     * Nome
     * @var string 
     */
    private $nome = '';

    /**
     * Matrícula
     * @var string 
     */
    private $matricula = '';

    /**
     * Funcionário
     * 
     * @param string $nome
     * @param string $matricula
     */
    public function __construct(string $nome, string $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    /**
     * Retorna o Nome
     * @return string
     */
    public function getNome(): string {
        return $this->nome;
    }

    /**
     * Configura o Nome
     * 
     * @param string $nome
     * @return Funcionario
     */
    public function setNome(string $nome): Funcionario {
        $this->nome = $nome;
        return $this;
    }

    /**
     * Retorna Matrícula
     * @return string
     */
    public function getMatricula(): string {
        return $this->matricula;
    }

    /**
     * Configura a Matrícula
     * 
     * @param string $matricula
     * @return Funcionario
     */
    public function setMatricula(string $matricula): Funcionario {
        $this->matricula = $matricula;
        return $this;
    }

}
