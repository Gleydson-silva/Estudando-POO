<?php

include_once "AcoesVideo.php";
class Video implements AcoesVideo{

    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo)
    {
        $this->setTitulo($titulo);
        $this->setAvaliacao(0);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }

    public function play(){
        $this->setReproduzindo(true);
    }
    public function pause(){
        $this->setReproduzindo(false);
    }
    public function like(){
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    public function maisUmaView(){
        $this->setViews($this->getViews() + 1);
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){
        $this->titulo = $t;
    }

    public function getAvaliacao(){
        return $this->avaliacao;
    }
    public function setAvaliacao($a){

        if($this->getViews() > 0){
            $media = ($this->getAvaliacao() + $a) / $this->getViews();
        }else{
            $media = $a;
        }
        
        $this->avaliacao = $media;
    }

    public function getViews(){
        return $this->views;
    }
    public function setViews($v){
        $this->views = $v;
    }

    public function getCurtidas(){
        return $this->curtidas;
    }
    public function setCurtidas($c){
        $this->curtidas = $c;
    }

    public function getReproduzindo(){
        return $this->reproduzindo;
    }
    public function setReproduzindo($r){
        $this->reproduzindo = $r;
    }


}



?>