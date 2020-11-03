<?php
/**
 * A classe abstrata Animal não pode ser instanciada. Não gera filhas. E tem atributos e métodos implementados.
 */
abstract class Animal {

    // Atributos
    private $peso;
    private $idade;
    private $membros;

    // Métodos acessores e mutantes
    public final function getPeso() {

        return $this->peso;

    }

    public final function setPeso($peso) {

        $this->peso = $peso;
        
    }
    
    public final function getIdade() {

        return $this->idade;

    }

    public final function setIdade($idade) {

        $this->idade = $idade;

    }

    public final function getMembros() {

        return $this->membros;

    }

    public final function setMembros($membros) {

        $this->membros = $membros;

    }

    // Métodos abstratos
    public abstract function locomover();

    public abstract function alimentar();
    
    public abstract function emitirSom();

}
?>