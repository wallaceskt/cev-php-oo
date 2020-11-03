<?php
require_once('Animal.php');

class Mamifero extends Animal {

    // Atributos
    private $corPelo;

    // Métodos acessores e mutantes
    public final function getCorPelo() {

        return $this->corPelo;

    }

    public final function setCorPelo($cor) {

        $this->corPelo = $cor;

    }

    // Método construtor
    public function __construct($peso, $idade, $membros, $corPelo) {

        $this->setPeso($peso);
        $this->setIdade($idade);
        $this->setMembros($membros);
        $this->setCorPelo($corPelo);

    }

    // Sobrescrevendo métodos (polimorfismo de sobreposição)
    public function locomover() {

        echo "<p>O mamífero está correndo.</p>";

    }

    public function alimentar() {

        echo "<p>O mamífero está mamando.</p>";

    }
    
    public function emitirSom() {

        echo "<p>O mamífero está emitindo som típico.</p>";

    }

}
?>