<?php
class ContaBanco {
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Métodos acessores
    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($num) {
        $this->numConta = $num;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    // Método construtor
    public function __construct($num, $dono) {
        $this->setNumConta($num);
        $this->setDono($dono);
        $this->setStatus(false);
        $this->setSaldo(0);
    }

    // Outros métodos
    public function abrirConta($tipo) {
        if (!$this->getStatus()) {
            $this->setTipo($tipo);
            $this->setStatus(true);
            $saldo = ($this->getTipo() == "cc") ? 50 : 150;
            $this->setSaldo($saldo);
            echo "<p>A conta está aberta. Seu saldo é de R$ " . number_format($this->getSaldo(),2,",",".") . ".</p>";
        } else {
            echo "<p>A conta já está aberta.<p>";
        }
    }

    public function fecharConta() {
        if ($this->getStatus()) {
            if ($this->getSaldo() > 0) {
                $this->sacar($this->getSaldo());
                echo "<p>A conta está fechada.</p>";
            } elseif ($this->getSaldo() < 0) {
                echo "<p>[ERRO] A conta está em débito!</p>";
            } else {
                $this->setStatus(false);
                echo "<p>A conta está fechada.</p>";
            }
        } else {
            echo "<p>A conta já está fechada.</p>";
        }
        
    }

    public function depositar($valor) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito no valor de R$ " . number_format($valor,2,",",".") . " foi efetuado com sucesso.</p>";
            echo "<p>Saldo atual: R$ " . number_format($this->getSaldo(),2,",",".") . "</p>";
        } else {
            echo "<p>[ERRO] Impossível depositar! A conta está fechada.</p>";
        }
    }

    public function sacar($valor) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque no valor de R$ " . number_format($valor,2,",",".") . " efetuado com sucesso.</p>";
                echo "<p>Saldo atual: R$ " . number_format($valor,2,",",".") . "</p>";
            } else {
                echo "<p>[ERRO] O valor de R$ " . number_format($valor,2,",",".") . " é maior que seu saldo!</p>";
            }
        } else {
            echo "<p>[ERRO] Impossível sacar! A conta está fechada.</p>";
        }
    }

    public function pagarMensalidade() {
        if ($this->getStatus()) {
            $v = "";
            if ($this->getTipo() == "cc") {
                $v = 12;
            } elseif ($this->getTipo() == "cp") {
                $v = 20;
            }
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade paga no valor de R$ " . number_format($v,2,",",".") . ".</p>";
        } else {
            echo "<p>[ERRO] Não pode pagar a mensasidade de uma conta fechada!</p>";
        }        
    }

    public function formatarMoeda($valor) {
        return number_format($valor,2,",",".");
        //echo money_format('%.2n', $valor);
    }
}
?>