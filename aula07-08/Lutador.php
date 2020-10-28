<?php
class Lutador {
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // Métodos especiais de acesso e modificação
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }
    
    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
    
    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }
    
    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria(); 
    }
    
    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria() {
        if ($this->getPeso() < 52.2) {
			$this->categoria = "Inválido";			
		} else if ($this->getPeso() <= 70.3) {
			$this->categoria = "Leve";
		} else if ($this->getPeso() <= 83.9) {
			$this->categoria = "Médio";
		} else if ($this->getPeso() <= 120.2) {
			$this->categoria = "Pesado";
		} else {
			$this->categoria = "Inválido";
		}
    }
    
    public function getVitorias() {
        return $this->vitorias;
    }

    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }
    
    public function getDerrotas() {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }
    
    public function getEmpates() {
        return $this->empates;
    }

    public function setEmpates($empates) {
        $this->empates = $empates;
    }

    // Método construtor
    public function __construct ($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
		$this->setNome($nome);
		$this->setNacionalidade($nacionalidade);
		$this->setIdade($idade);
		$this->setAltura($altura);
		$this->setPeso($peso);
		$this->setVitorias($vitorias);
		$this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    // Outros métodos
    public function apresentar() {
		$retorno = "";
		
		$retorno = "<p>========== APRESENTAÇÃO ==========<br>";
		$retorno .= "CHEGOU A HORA! Apresentamos o lutador " . $this->getNome() . ".<br>";
		$retorno .= "Diretamente de " . $this->getNacionalidade() . "<br>";
		$retorno .= "com " . $this->getIdade() . " anos de idade e " . $this->getAltura() . " m de altura.<br>";
		$retorno .= "Pesando " . $this->getPeso() . " kg.<br>";
		$retorno .= $this->getVitorias() . " vitória(s).<br>";
		$retorno .= $this->getDerrotas() . " derrota(s).<br>";
		$retorno .= $this->getEmpates() . " empate(s).<br>";
		$retorno .= "========== ========== ===========</p>";
		
        echo $retorno;
    }
    
    public function status() {
		$retorno = "";
		
		$retorno = "<p>========== LUTADOR ==========<br>";
		$retorno .= $this->getNome() . " é um peso " . $this->getCategoria() . ".<br>";
		$retorno .= "Ganhou " . $this->getVitorias() . " vez(es).<br>";
		$retorno .= "Perdeu " . $this->getDerrotas() . " vez(es).<br>";
		$retorno .= "Empatou " . $this->getEmpates() . " vez(es).<br>";
		$retorno .= "========== ======= ==========</p>";
		
		echo $retorno;
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
        //echo "<p>Vitória!</p>";
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
        //echo "<p>Derrota!</p>";
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
        //echo "<p>Empate!</p>";
    }
}

?>