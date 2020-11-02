<?php
require_once('Pessoa.php');

/**
 * Herança para diferença
 */
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

        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
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

    public function pagarMensalidade() {

        if ($this->getMatricula() !== null && !empty($this->getMatricula())) {

            echo "<p>A mensalidade do curso {$this->getCurso()} foi paga no valor de R$ 500,00.</p>";
            
        } else {
            
            echo "<p>A matrícula no curso {$this->getCurso()} não existe!</p>";
            
        }
        
    }

}
?>