<?php
require_once "Publicacao.php";
require_once "Pessoa.php";
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($t, $a, $to, $l)
    {
        $this->titulo = $t;
        $this->autor = $a;
        $this->totPaginas = $to;
        $this->leitor = $l;
        $this->pagAtual = 0;
        $this->aberto = true;
    }

    public function detalhar(){
        echo "<br> Livro " . $this->getTitulo() . " escrito por " . $this->getAutor();
        echo "<br> Páginas: " . $this->getTotPaginas() . " Página atual ". $this->getPagAtual();
        echo "<br> Sendo lido por " . $this->getLeitor()->getNome() . " do sexo " . $this->getLeitor()->getSexo();
        echo "<br> que tem " . $this->getLeitor()->getIdade() . " anos";
    }

    public function abrir(){
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setAberto(false);
    } 
    public function folhear($p){
        if($p < $this->getTotPaginas()){
            $this->setPagAtual($p);
        }else{
            $this->setPagAtual(0);
        }
    } 
    public function avancarPag(){
        if($this->getPagAtual() < $this->getTotPaginas()){
            $this->setPagAtual($this->getPagAtual() + 1);
        }else{
            $this->setPagAtual(0);
        }

    } 
    public function voltarPag(){
        if($this->getPagAtual() > 0){
            $this->setPagAtual($this->getPagAtual() - 1);
        }else{
            $this->setPagAtual($this->getTotPaginas());
        }
        
    } 

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){
        $this->titulo = $t;
    }

    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($a){
        $this->autor = $a;
    }

    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setTotPaginas($t){
        $this->totPaginas = $t;
    }

    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($p){
        $this->pagAtual = $p;
    }

    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($a){
        $this->aberto = $a;
    }

    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($l){
        $this->leitor = $l;
    }


}


?>