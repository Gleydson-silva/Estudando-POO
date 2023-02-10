<?php

require_once "Animal.php";
class Reptil extends Animal{

    protected $corEscama;

    public function locomover(){
        echo "<p> Rastejando </p>";
    }
    public function alimentar(){
        echo "<p> Comendo vejetais </p>";
    }
    public function emitirSom(){
        echo "<p> Som de réptil </p>";
    }

    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($c){
        $this->corEscama = $c;
    }

}

class Cobra extends Reptil{

}

class Tartaruga extends Reptil{

    public function locomover()
    {
        echo "<p> Andando bemmmm devagar </p>";
    }
}

?>