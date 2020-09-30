<?php
/**
* Class Caneta defineos atributos (características) e métodos (comportamentos) comuns que serão compartilhados por um objeto.
*/
class Caneta {

	// Atributos
	private $modelo;
	private $cor;
	private $ponta;
	protected $carga;
	protected $tampada;

	// Métodos especiais de acesso
	public function getModelo() {

		return $this->modelo;
	
	}

	public function setModelo($modelo) {

		$this->modelo = $modelo;

	}

	public function getCor() {

		return $this->cor;

	}

	public function setCor($cor) {

		$this->cor = $cor;

	}

	public function getPonta() {

		return $this->ponta;

	}

	public function setPonta($ponta) {

		$this->ponta = $ponta;

	}

	public function getCarga() {

		return $this->carga;

	}

	public function setCarga($carga) {

		$this->carga = $carga;

	}

	public function getTampada() {

		return $this->tampada;

	}

	public function setTampada($tampada) {

		$this->tampada = $tampada;

	}

	// Método construtor
	public function __construct($modelo, $cor, $ponta) {

		$this->tampada = true;
		$this->modelo = $modelo;
		$this->setCor($cor);
		$this->ponta = $ponta;

	}

	// Outros métodos
	public function rabiscar() {

		return (($this->getTampada()) || ($this->getCarga() == 0)) ? "<p>[ERRO] A caneta {$this->getModelo()} está tampada ou sem carga!</p>" : "<p>{$this->getModelo()} rabiscando...</p>";
		// $retorno = "";

		// if($this->getCarga() == 0) {

		// 	$retorno = "<p>[ERRO] A caneta {$this->getModelo()} está sem carga!</p>";
			
		// } else {

		// 	if($this->getTampada()) {

		// 		$this->setTampada(false);
		// 		$retorno = "<p>A caneta {$this->getModelo()} foi destampada.</p>";

		// 	}

		// 	$retorno = $retorno . "<p>A caneta {$this->getModelo()} está rabiscando...</p>";

		// }

		// return $retorno;

	}

	public function tampar() {

		if ($this->tampada) {

			echo "<p>Caneta já tampada.</p>";
		
		} else {
		
			echo "<p>Caneta com ponta {$this->getPonta()} tampada.</p>";
			$this->tampada = true;
		
		}

	}

	public function destampar() {

		if ($this->tampada) {
			
			echo "<p>Caneta destampada.</p>";
			$this->tampada = false;
		
		} else {
			
			echo "<p>Caneja já está destampada.</p>";

		}
		
	}

	public function status() {

		echo "<p>========== Status ==========<br>";
		echo "Caneta: " . $this->getModelo() . "<br>";
		echo "Cor: " . $this->getCor() . "<br>";
		echo "Ponta: " . $this->getPonta() . "<br>";
		echo "Carga: " . $this->getCarga() . "<br>";
		echo "Tampada? ";
		echo ($this->tampada)?'Sim':'Não';
		echo "<br>";
		echo "========== ****** ==========</p>";
	
	}

}
?>