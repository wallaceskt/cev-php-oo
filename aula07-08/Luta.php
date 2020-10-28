<?php
require_once 'Lutador.php';

class Luta {
    // Atributos
    private $desafiado; // É um tipo abstrato de dado. Vai ser uma instância da classe Lutador
    private $desafiante; // É um tipo abstrato de dado. Vai ser uma instância da classe Lutador
    private $rounds; // inteiro
    private $aprovada; // lógico

    // Métodos acessores e modificadores
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

    // Métodos
    public function marcarLuta($lutador1, $lutador2) {
        // Só pode ser marcada entre lutadores de mesma categoria
        // Desafiado e desafiante devem ser lutadores diferentes
        if ($lutador1->getCategoria() === $lutador2->getCategoria() && $lutador1 != $lutador2) {
            $this->setDesafiado($lutador1);
            $this->setDesafiante($lutador2);
            $this->setAprovada(true);
        } else {
            echo "<p>[ERRO] Os lutadores devem ser diferentes e devem estar na mesma categoria!</p>";
            $this->setDesafiado(null);
            $this->setDesafiante(null);
            $this->setAprovada(false);
        }
    }

    public function lutar() {
        // Só pode acontecer se estiver aprovada
        // Só pode ter como resultado a vitória de um dos lutadores ou o empate
        if ($this->getAprovada()) {
            // Apresenta os lutadores
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();

            $vencedor = rand(0, 2);

            // 0 - empate
            // 1 - vitória do desafiado (lutador 1)
            // 2 - vitória do desafiante (lutador 2)
            switch ($vencedor) {
                case 0:
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                break;
                
                case 1:
                    echo "<p>Vitória do " . $this->desafiado->getNome() . "!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                break;
                
                case 2:
                    echo "<p>Vitória do {$this->desafiante->getNome()}!</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<p>[ERRO] A luta não está aprovada!</p>";
        }
        
    }
}

?>