<?php
/**
 * A classe abstrata pessoa não pode ser instanciada. Não gera filhas. E tem atributos e métodos implementados.
 */
abstract class Pessoa {

    // Atributos privados para manter o encapsulamento
    private $nome;
    private $idade;
    private $sexo;

    // Métodos acessores e mutantes finais (não podem ser sobrescritos)
    public final function getNome() {

        return $this->nome;

    }

    public final function setNome($nome) {

        $this->nome = $nome;

    }
    
    public final function getIdade() {

        return $this->idade;

    }

    public final function setIdade($idade) {

        $this->idade = $idade;

    }

    public final function getSexo() {

        return $this->sexo;

    }

    public final function setSexo($sexo) {

        $this->sexo = $sexo;

    }

    // Método construtor
    public function __construct($nome, $idade, $sexo) {

        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);

    }

    // Método final (não pode ser sobrescrito)
    public final function fazerAniversario() {

        $this->idade ++;

        echo "<p>{$this->getNome()} faz aniversário de {$this->getIdade()} anos. Parabéns!</p>";

    }

}
?>