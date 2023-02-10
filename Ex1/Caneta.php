<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function __construct($m, $c, $p)
    {
        $this->setModelo($m);
        $this->setCor($c);
        $this->setPonta($p);
        $this->destampar();
    }

    public function rabiscar() {
        if($this->tampada == true){
            echo "<p>Não posso rabiscar</p>";
        }
        else{
            echo "<p> Estou Rabiscando </p>";
        }
       
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar () {
        $this->tampada = false;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getModelo(){
        return $this->modelo;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }
    public function getCor(){
        return $this->cor;
    }

    public function setPonta($ponta){
        $this->ponta = $ponta;
    }
    public function getPonta(){
        return $this->ponta;
    }

    public function getTampada(){
        return $this->tampada;
    }

}