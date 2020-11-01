<?php
require_once('Aluno.php');

/**
 * Herança para diferença
 */
class Bolsista extends Aluno {

    // Atributo privado
    private $bolsa;

    // Métodos acessores e mutantes
    public function getBolsa() {

        return $this->bolsa;

    }

    public function setBolsa($bolsa) {

        $this->bolsa = $bolsa;
        
    }

    // Método construtor
    public function __construct($nome, $idade, $sexo, $matricula, $curso) {

        Parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->setBolsa(500);

    }

    // Outros métodos
    public function renovarBolsa() {

        echo "<p>O(A) bolsista teve a bolsa renovada.</p>";

    }

    // Sobrescrevendo método declarado em Aluno. Exemplo de polimorfismo.
    public function pagarMensalidade() {

        if ($this->getMatricula() !== null && !empty($this->getMatricula())) {

            echo "<p>A mensalidade do curso {$this->getCurso()} foi paga no valor de R$ 250,00.</p>";
            
        } else {
            
            echo "<p>A matrícula no curso {$this->getCurso()} não existe!</p>";
            
        }
        
    }

}
?>