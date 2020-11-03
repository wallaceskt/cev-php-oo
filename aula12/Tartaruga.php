<?php
require_once('Reptil.php');

/**
 * A classe Tartaruga é um terceiro nível de herança.
 * Aqui ocorre uma especialização.
 */
class Tartaruga extends Reptil {

    // Sobrescrevendo métodos (polimorfismo de sobreposição)
    public function locomover() {

        echo "<p>A tartaruga está andando lentamente.</p>";

    }

}
?>