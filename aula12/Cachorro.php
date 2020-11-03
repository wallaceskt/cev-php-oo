<?php
require_once('Mamifero.php');

/**
 * A classe Cachorro é um terceiro nível de herança.
 * Aqui ocorre uma especialização.
 */
class Cachorro extends Mamifero {

    // Sobrescrevendo métodos (polimorfismo de sobreposição)
    public function enterrarOsso() {

        echo "<p>O cachorro está enterrando o osso.</p>";

    }

    public function emitirSom() {

        echo "<p>O cachorro está latindo.</p>";

    }

    // Outros métodos
    public function abanarRabo() {

        echo "<p>O cachorro está abanando o rabo.</p>";
        
    }

}
?>