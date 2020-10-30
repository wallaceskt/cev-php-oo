<?php
require_once('Pessoa.php');

class Funcionario extends Pessoa {

    // Atributos
    private $setor;
    private $trabalhando;

    // Métodos acessores e mutantes
    public function getSetor() {

        return $this->setor;

    }

    public function setSetor($setor) {

        $this->setor = $setor;
        
    }

    public function getTrabalhando() {

        return $this->trabalhando;

    }

    public function setTrabalhando($trabalhando) {

        $this->trabalhando = $trabalhando;

    }

    // Método construtor
    public function __construct($nome, $idade, $sexo, $setor, $trabalhando) {

        Parent::__construct($nome, $idade, $sexo);
        $this->setSetor($setor);
        $this->setTrabalhando($trabalhando);

    }

    // Outros métodos
    public function mudarTrabalho($trabalho) {

        $this->setSetor($trabalho);

        echo "<p>O funcionário {$this->getNome()} mudou para o setor de {$this->getSetor()}.</p>";

    }

}
?>