<?php

namespace Modelo\Solicitacao;

use DateTime;
use Doctrine\ORM\{
    Mapping\Column,
    Mapping\Entity,
    Mapping\GeneratedValue,
    Mapping\Id,
    Version
};
use Symfony\Component\Console\Helper\Table;

/**
 * @Entity
 * @Table(name="funcionarios")
 */
class Funcionario {

    /**
     * Identificador do registro
     * 
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * Nome
     * @Column(length = 60, nullable = false)
     * @var string 
     */
    private $nome = '';

    /**
     * Matrícula
     * @Column(length = 6, nullable = false, unique = true)
     * @var string 
     */
    private $matricula = '';

    /**
     * Data da última atualização do registro
     * 
     * @Column(type="datetime")
     * @Version
     * @var DateTime
     */
    protected $version;

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

    public function getId() {
        return $this->id;
    }

    public function getVersion(): DateTime {
        return $this->version;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setVersion(DateTime $version) {
        $this->version = $version;
        return $this;
    }
    
    public function __toString() {
        return nome + "(" + matricula + ")";
    }

}
