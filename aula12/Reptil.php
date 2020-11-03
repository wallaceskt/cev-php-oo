<?php
require_once('Animal.php');

class Reptil extends Animal {

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

        echo "<p>O réptil está se rastejando.</p>";

    }

    public function alimentar() {

        echo "<p>O réptil está comendo insetos.</p>";

    }
    
    public function emitirSom() {

        echo "<p>O réptil está emitindo som de réptil.</p>";

    }

}
?>