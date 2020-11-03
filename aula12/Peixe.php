<?php
require_once('Animal.php');

class Peixe extends Animal {

    // Atributos
    private $corEscama;

    // Métodos acessores e mutantes
    public final function getCorEscama() {

        return $this->corEscama;

    }

    public final function setCorEscama($cor) {

        $this->corEscama = $cor;

    }

    // Método construtor
    public function __construct($peso, $idade, $membros, $corEscama) {

        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorEscama($corEscama);

    }

    // Sobrescrevendo métodos (polimorfismo de sobreposição)
    public function locomover() {

        echo "<p>O peixe está nadando.</p>";

    }

    public function alimentar() {

        echo "<p>O peixe está comendo substâncias.</p>";

    }
    
    public function emitirSom() {

        echo "<p>O peixe não emite som.</p>";

    }

    // Outros métodos
    public function soltarBolha() {

        echo "<p>O peixe solta bolha.</p>";

    }

}
?>