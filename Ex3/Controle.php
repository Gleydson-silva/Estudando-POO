<?php
require_once("Controlador.php");
class ControleRemoto implements Controlador{

    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->setLigado(false);
        $this->setVolume(50);
        $this->setTocando(true);
    }
    
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo " Está ligado? " . ($this->getLigado()?"Sim":"Não");
        echo "<br> Está Tocando? " . ($this->getTocando()?"Sim":"Não");
        echo "<br> Volume: " . $this->getVolume(). " ";
        for($i = 0; $i < $this->getVolume(); $i += 10 ){
            echo("|");
        }
        echo "<br>";


    }
    public function fecharMenu(){
        echo "Menu fechado";
    }
    public function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
        else{
            echo "TV Desligada";
        }
    }
    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
        else{
            echo "TV Desligada";
        }
    }
    public function ligarMudo(){
        if($this->getLigado() and $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if($this->getLigado() and $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if($this->getLigado() and $this->getTocando() == false){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getLigado() and $this->getTocando()){
            $this->setTocando(false);
        }
    }

    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($v){
        $this->volume = $v;
    }

    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($l){
        $this->ligado = $l;
    } 
    
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($t){
        $this->tocando = $t;
    }
}

?>