<?php
require_once('Pessoa.php');
require_once('IPublicacao.php');

class Livro implements IPublicacao {

    // Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    // Métodos acessores e mutantes
    public function getTitulo() {

        return $this->titulo;

    }

    public function setTitulo($titulo) {

        $this->titulo = $titulo;

    }
    
    public function getAutor() {

        return $this->autor;

    }

    public function setAutor($autor) {

        $this->autor = $autor;

    }
    
    public function getTotPaginas() {

        return $this->totPaginas;

    }

    public function setTotPaginas($totPaginas) {

        $this->totPaginas = $totPaginas;

    }
    
    public function getPagAtual() {

        return $this->pagAtual;

    }

    public function setPagAtual($pagAtual) {

        $this->pagAtual = $pagAtual;

    }
    
    public function getAberto() {

        return $this->aberto;

    }

    public function setAberto($aberto) {

        $this->aberto = $aberto;

    }
    
    public function getLeitor() {

        return $this->leitor;

    }

    public function setLeitor($leitor) {

        $this->leitor = $leitor;

    }

    // Método construtor
    public function __construct($titulo, $autor, $totPaginas, $leitor) {

        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setLeitor($leitor);

    }

    // Sobrescrevendo métodos abstratos declarados na interface
    public function abrir() {

        if (!$this->getAberto()) {

            $this->setAberto(true);

            echo "<p>Livro aberto.</p>";
            
        } else {
            
            echo "<p>O livro já está aberto!</p>";
            
        }

    }
    
    public function fechar() {

        if ($this->getAberto()) {

            $this->setAberto(false);

            echo "<p>Livro fechado.</p>";
            
        } else {
            
            echo "<p>O livro já está fechado!</p>";
            
        }

    }

    public function folhear($pagina) {

        if ($this->getAberto() && ($this->getTotPaginas() > $pagina) && ($pagina > 0)) {

            $this->setPagAtual($pagina);

            echo "<p>Folheando o livro na página {$pagina}.</p>";
            
        } else {
            
            $this->setPagAtual(0);

            echo "<p>[ERRO] O livro está fechado ou a página não existe!</p>";
            
        }

    }

    public function avancarPag() {

        if ($this->getAberto() && $this->getPagAtual() < $this->getTotPaginas()) {

            $this->setPagAtual($this->getPagAtual() + 1);

            echo "<p>Avançou uma página. Agora, está na página {$this->getPagAtual()}.</p>";
            
        } else {
            
            echo "<p>[ERRO] O livro está fechado!</p>";
            
        }
        

    }

    public function voltarPag() {

        if ($this->getAberto() && $this->getPagAtual() > 0) {

            $this->setPagAtual($this->getPagAtual() - 1);

            echo "<p>Voltou uma página. Agora, está na página {$this->getPagAtual()}.</p>";
            
        } else {
            
            echo "<p>[ERRO] O livro está fechado!</p>";
            
        }

    }

    // Outros métodos
    public function detalhes() {
        
        echo "<p>========== DETALHES ==========</p>";
        echo "<p>Livro: {$this->getTitulo()}</p>";
        echo "<p>Autor: {$this->getAutor()}</p>";
        echo "<p>Páginas: {$this->getTotPaginas()}</p>";
        echo "<p>---</p>";

        if ($this->getAberto()) {

            echo "<p>O livro está aberto na página {$this->getPagAtual()} pelo leitor {$this->getLeitor()->getNome()}.</p>";

        } else {

            echo "<p>O livro está fechado.</p>";

        }
        
        echo "<p>========== ======== ==========</p>";
        
    }

}
?>