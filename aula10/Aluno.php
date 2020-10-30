<?php
require_once('Pessoa.php');

class Aluno extends Pessoa {

    // Atributos
    private $matricula;
    private $curso;

    // Métodos acessores e mutantes
    public function getMatricula() {

        return $this->matricula;

    }

    public function setMatricula($matricula) {

        $this->matricula = $matricula;

    }

    public function getCurso() {

        return $this->curso;

    }

    public function setCurso($curso) {

        $this->curso = $curso;

    }

    // Método construtor
    public function __construct($nome, $idade, $sexo, $matricula, $curso) {

        Parent::__construct($nome, $idade, $sexo);
        $this->setMatricula($matricula);
        $this->setCurso($curso);

    }

    // Outros métodos
    public function cancelarMatricula() {

        if ($this->getMatricula() !== null && !empty($this->getMatricula())) {

            echo "<p>A matrícula no curso {$this->getCurso()} foi cancelada.</p>";

            $this->setMatricula(null);
            $this->setCurso(null);
            
        } else {

            echo "<p>A matrícula no curso {$this->getCurso()} já está cancelada!</p>";

        }

    }

}
?>