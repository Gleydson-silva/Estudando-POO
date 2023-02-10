<?php

require_once "Animal.php";
class Mamifero extends Animal{

    protected $corPelo;

    public function locomover(){
        echo "<p> Correndo </p>";
    }
    public function alimentar(){
        echo "<p> Mamando </p>";
    }
    public function emitirSom(){
        echo "<p> Barulho de mamifero </p>";
    }

    public function getCorPelo(){
        return $this->corPelo;
    }
    public function setCorPelo($p){
        $this->corPelo = $p;
    }

}

class Canguru extends Mamifero{

    public function usarBolsa(){
        echo "<p> Usando a Bolsa </p>";

    }
    public function locomover(){
        echo "<p> Pulando </p>";
    }
}

class Cachorro extends Mamifero{

    public function enterrarOsso(){
        echo "<p> Enterrando o Osso </p>";

    }
    public function abanarRabo(){
        echo "<p> Abanando o Rabo </p>";
    }

    public function emitirSom()
    {
        echo "<p> Latindo </p>";
    }
}

?>