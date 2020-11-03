<?php
require_once('Mamifero.php');

/**
 * A classe Canguru é um terceiro nível de herança.
 * Aqui ocorre uma especialização.
 */
class Canguru extends Mamifero {

    // Sobrescrevendo métodos (polimorfismo de sobreposição)
    public function locomover() {

        echo "<p>O canguru está saltando.</p>";

    }

    // Outros métodos
    public function usarBolsa() {

        echo "<p>O canguru está usando a bolsa.</p>";
        
    }

}
?>