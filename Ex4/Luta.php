<?php
require_once "Lutador.php";
class Luta{

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    
    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2){
            $this->setAprovada(true);
            $this->setDesafiante($l1);
            $this->setDesafiado($l2);
        }else{
            $this->setAprovada(false);
            $this->setDesafiante(null);
            $this->setDesafiado(null);
        }
    }

    public function lutar(){
        if($this->getAprovada()){
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = rand(0,2);

            switch($vencedor){
                case 0:
                    echo "Empatou!";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case 1:
                    echo "Desafiante {$this->desafiante->getNome()} Ganhou";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                case 2:
                    echo "Desafiado {$this->desafiado->getNome()} Ganhou";
                    $this->desafiante->perderLuta();
                    $this->desafiado->ganharLuta();
                    break;
            }
               

        }else{
            echo "<br> Luta não pode acontecer <br>";
        }
    }

    public function setDesafiado($d){
        $this->desafiado = $d;
    }
    public function getDesafiado(){
        return $this->desafiado;
    }

    public function setDesafiante($d){
        $this->desafiante = $d;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }

    public function setRounds($r){
        $this->rounds = $r;
    }
    public function getRounds(){
        return $this->rounds;
    }

    public function setAprovada($a){
        $this->aprovada = $a;
    }
    public function getAprovada(){
        return $this->aprovada;
    }

}



?>