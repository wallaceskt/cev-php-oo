<?php
require_once('IControlador.php');

class ControleRemoto implements IControlador {
    // Atributos
    private $volume;
    private $ligado;
    private $tocando;

    // Métodos especiais de acesso
    public function getVolume() {
        return $this->volume;
    }

    public function setVolume($volume) {
        $this->volume = $volume;
    }
    
    public function getLigado() {
        return $this->ligado;
    }

    public function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    public function getTocando() {
        return $this->tocando;
    }

    public function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    // Método construtor
    public function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    // Sobrescrevendo métodos
    public function ligar() {
        if (!$this->getLigado()) {
            $this->setLigado(true);
            echo "<p>O controle está ligado.</p>";
        } else {
            echo "<p>O controle já está ligado.</p>";
        }
    }
    
    public function desligar() {
        if ($this->getLigado()) {
            $this->setLigado(false);
            echo "<p>O controle está desligado.</p>";
        } else {
            echo "<p>O controle já está desligado.</p>";
        }
    }
    
    public function abrirMenu() {
        if ($this->getLigado()) {
            echo "<p>========== MENU ==========<br>";
            echo "1. Ligar/Desligar<br>";
            echo "2. +<br>";
            echo "3. -<br>";
            echo "4. Mudo<br>";
            echo "5. Play/Pause<br>";
            echo "========== FIM ==========</p>";
        } else {
            echo "<p>O controle está desligado.</p>";
        }
    }
    
    public function fecharMenu() {
        if ($this->getLigado()) {
            echo "<p>Menu fechado.</p>";
        } else {
            echo "<p>O controle está desligado.</p>";
        }
    }
    
    public function maisVolume() {
        if ($this->getLigado()) {
            if ($this->getVolume() < 100) {
                $this->setVolume($this->getVolume() + 10);
                echo "<p>Volume: <b>" . $this->getVolume();
                $vol = " ";
                for ($i=0; $i < $this->getVolume(); $i++) { 
                    $vol .= "|";
                }
                echo "{$vol}</b></p>";
            } else {
                echo "<p>Volume no máximo.</p>";
            }
        } else {
            echo "<p>O controle está desligado.</p>";
        }
    }
    
    public function menosVolume() {
        if ($this->getLigado()) {
            if ($this->getVolume() > 0) {
                $this->setVolume($this->getVolume() - 10);
                echo "<p>Volume: <b>" . $this->getVolume();
                $vol = " ";
                for ($i=0; $i < $this->getVolume(); $i++) { 
                    $vol .= "|";
                }
                echo "{$vol}</b></p>";
            } else {
                echo "<p>Volume no mínimo.</p>";
            }
        } else {
            echo "<p>O controle está desligado.</p>";
        }
    }
    
    public function ligarMudo() {
        if ($this->getLigado()) {
            if ($this->getVolume() > 0) {
                $this->setVolume(0);
                echo "<p>Volume: X</p>";
            } else {
                //echo "<p>Volume já está mudo.</p>";
                $this->desligarMudo();
            }
        } else {
            echo "<p>O controle está desligado.</p>";
        }
    }
    
    public function desligarMudo() {
        if ($this->getLigado()) {
            if ($this->getVolume() == 0) {
                $this->setVolume(50);
                echo "<p>Volume: <b>" . $this->getVolume();
                $vol = " ";
                for ($i=0; $i < $this->getVolume(); $i++) { 
                    $vol .= "|";
                }
                echo "{$vol}</b></p>";
            } else {
                //echo "<p>Volume já está mudo.</p>";
                $this->ligarMudo();
            }
        } else {
            echo "<p>O controle está desligado.</p>";
        }
    }
    
    public function play() {
        if ($this->getLigado()) {
            if (!$this->getTocando()) {
                $this->setTocando(true);
                echo "<p>Tocando.</p>";
            } else {
                $this->pause();
            }
        } else {
            echo "<p>O controle está desligado.</p>";
        }
    }
    
    public function pause() {
        if ($this->getLigado()) {
            if ($this->getTocando()) {
                $this->setTocando(false);
                echo "<p>Pausado.</p>";
            } else {
                $this->play();
            }
        } else {
            echo "<p>O controle está desligado.</p>";
        }
    }
}
?>