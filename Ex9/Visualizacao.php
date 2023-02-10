<?php

include_once "Gafanhoto.php";
include_once "Video.php";
class Visualizacao{

    private $espectador;
    private $filme;

    function __construct($espectador, $video)
    {
        $this->setEspectador($espectador);
        $this->setFilme($video);
        $this->getFilme()->maisUmaView();
        $this->getEspectador()->viuMaisUm();
    }

    public function curtir(){
        $this->getFilme()->like();
    }
    public function avaliar(){
        $this->getFilme()->setAvaliacao(5);
    }

    public function avaliarNota($n){
        $this->getFilme()->setAvaliacao($n);
    }

    public function avaliarPorc($p){
        $nova = 0;
        if($p <= 20){
            $nova = 3;
        }elseif($p <= 50){
            $nova = 5;
        }elseif($p <= 90){
            $nova = 8;
        }else{
            $nova = 10;
        }

        $this->getFilme()->setAvaliacao($nova);
    }

    public function getEspectador(){
        return $this->espectador;
    }
    public function setEspectador($e){
        $this->espectador = $e;
    }

    public function getFilme(){
        return $this->filme;
    }
    public function setFilme($f){
        $this->filme = $f;
    }
}



?>