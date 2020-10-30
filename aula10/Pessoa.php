<?php
class Pessoa {

    // Atributos
    private $nome;
    private $idade;
    private $sexo;

    // Métodos acessores e mutantes
    public function getNome() {

        return $this->nome;

    }

    public function setNome($nome) {

        $this->nome = $nome;

    }
    
    public function getIdade() {

        return $this->idade;

    }

    public function setIdade($idade) {

        $this->idade = $idade;

    }

    public function getSexo() {

        return $this->sexo;

    }

    public function setSexo($sexo) {

        $this->sexo = $sexo;

    }

    // Método construtor
    public function __construct($nome, $idade, $sexo) {

        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);

    }

    // Outros métodos
    public function fazerAniversario() {

        $this->setIdade($this->getIdade() + 1);

        echo "<p>{$this->getNome()} faz aniversário de {$this->getIdade()} anos. Parabéns!</p>";

    }

}
?>