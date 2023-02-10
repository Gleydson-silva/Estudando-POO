<?php

include_once "Pessoa.php";
class Aluno extends Pessoa{

    private $matricula;
    private $curso;

    public function __construct($nome, $idade, $sexo, $matricula, $curso)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setMatricula($matricula);
        $this->setCurso($curso);
    }

    public function pagarMensalidade(){
        echo "<p> Pagando a Mensalidade do aluno " . $this->getNome();
    }   

    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($m){
        $this->matricula = $m;
    }

    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($c){
        $this->curso = $c;
    }
}

?>