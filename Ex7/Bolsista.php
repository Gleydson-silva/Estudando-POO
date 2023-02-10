<?php

include_once "Aluno.php";
class Bolsista extends Aluno{

    private $bolsa;
 
    public function pagarMensalidade(){
        echo "O aluno " . $this->getNome() . " é bolsista, não paga mensalidade";
    } 
    public function renovarBolsa(){
        echo "<p>Bolsa renovada! </p>";
    }  

    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($b){
        $this->bolsa = $b;
    }


}

?>