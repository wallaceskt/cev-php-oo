<?php
require_once('Aluno.php');

/**
 * Herança para diferença
 */
class Tecnico extends Aluno {

    // Atributo privado
    private $registroProfissional;

    // Métodos acessores e mutantes
    public function getRegistroProfissional() {

        return $this->registroProfissional;

    }

    public function setRegistroProfissional($registroProfissional) {

        $this->registroProfissional = $registroProfissional;
        
    }

    // Método construtor
    public function __construct($nome, $idade, $sexo, $matricula, $curso, $registroProfissional) {

        Parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->setRegistroProfissional($registroProfissional);

    }

    // Outros métodos
    public function praticar() {

        echo "<p>O técnico está praticando.</p>";

    }

}
?>