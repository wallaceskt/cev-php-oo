<?php
require_once('Pessoa.php');

class Professor extends Pessoa {

    // Atributos
    private $especialidade;
    private $salario;

    // Métodos acessores e mutantes
    public function getEspecialidade() {

        return $this->especialidade;

    }

    public function setEspecialidade($especialidade) {

        $this->especialidade = $especialidade;

    }

    public function getSalario() {

        return $this->salario;

    }

    public function setSalario($salario) {

        $this->salario = $salario;

    }

    // Método construtor
    public function __construct($nome, $idade, $sexo, $especialidade, $salario) {

        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setEspecialidade($especialidade);
        $this->setSalario($salario);

    }

    // Outros métodos
    public function receberAumento($aumento) {

        $this->setSalario($this->getSalario() + $aumento);

        echo "<p>O salário foi reajustado para R$ {$this->getSalario()}.</p>";

    }

}
?>