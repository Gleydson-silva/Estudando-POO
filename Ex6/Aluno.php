<?php

include_once "Pessoa.php";
class Aluno extends Pessoa{

    private $matr;
    private $curso;

    public function __construct($n, $i, $s, $c)
    {   
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo($s);
        $this->setMatr(true);
        $this->setCurso($c);
    }

    public function cancelarMatr(){
        echo "Matricula cancelada";
        $this->setMatr(false);
    }   

    public function getMatr(){
        return $this->matr;
    }
    public function setMatr($m){
        $this->matr = $m;
    }

    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($c){
        $this->curso = $c;
    }
}

?>