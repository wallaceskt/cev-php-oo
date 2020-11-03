<?php
require_once('Animal.php');

class Ave extends Animal {

    // Atributos
    private $corPena;

    // Métodos acessores e mutantes
    public final function getCorPena() {

        return $this->corPena;

    }

    public final function setCorPena($cor) {

        $this->corPena = $cor;

    }

    // Método construtor
    public function __construct($peso, $idade, $membros, $corPena) {

        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorPena($corPena);

    }

    // Sobrescrevendo métodos (polimorfismo de sobreposição)
    public function locomover() {

        echo "<p>A ave está voando.</p>";

    }

    public function alimentar() {

        echo "<p>A ave está comendo frutas.</p>";

    }
    
    public function emitirSom() {

        echo "<p>A ave está emitindo som de ave.</p>";

    }

    // Outros métodos
    public function fazerNinho() {

        echo "<p>O peixe faz ninho.</p>";

    }

}
?>