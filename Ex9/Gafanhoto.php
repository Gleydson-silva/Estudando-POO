<?php

include_once "Pessoa.php";
class Gafanhoto extends Pessoa{

    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->setExperiencia(0);
        $this->setTotAssistido(0);
        $this->setLogin($login);
    }

    public function viuMaisUm(){
        $this->setTotAssistido($this->getTotAssistido() + 1);
    } 

    public function getLogin(){
        return $this->login;
    }
    public function setLogin($l){
        $this->login = $l;
    }

    public function getTotAssistido(){
        return $this->totAssistido;
    }
    public function setTotAssistido($t){
        $this->totAssistido = $t;
    }
}



?>