<?php

class Lutador{

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($n, $na, $i, $a, $p, $v, $d, $e)
    {
        $this->setNome($n);
        $this->setNacionalidade($na);
        $this->setIdade($i);
        $this->setAltura($a);
        $this->setPeso($p);
        $this->setVitorias($v);
        $this->setDerrotas($d);
        $this->setEmpates($e);
    }

    public function apresentar(){
        echo "<br> ------------------Lutador---------------- <br>";
        echo "Lutador: " . $this->getNome() . "<br>";
        echo "Origem: " . $this->getNacionalidade(). "<br>";
        echo "Idade: " . $this->getIdade() . " anos <br>";
        echo "Altura: " . $this->getAltura() . " m <br>";
        echo "Pesando: " . $this->getPeso() . " Kg <br>";
        echo "Ganhou: " . $this->getVitorias(). "<br>";
        echo "Perdeu: " . $this->getDerrotas(). "<br>";
        echo "Empatou: " . $this->getEmpates(). "<br><br>";
    }
    public function status(){
       echo $this->getNome(). "<br>";
       echo "É um peso ". $this->getCategoria(). "<br>"; 
       echo $this->getVitorias() . " Vitórioas <br>";
       echo $this->getDerrotas() . " Derrotas <br>";
       echo $this->getEmpates() . " Empates <br>";
    }    
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }    
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }    
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }    
    public function getNome(){
       return $this->nome; 
    }    
    public function setNome($n){
        $this->nome = $n;
    }
    
    public function getNacionalidade(){
        return $this->nacionalidade; 
    }    
    public function setNacionalidade($n){
         $this->nacionalidade = $n;
    }

    public function getIdade(){
        return $this->idade; 
    }    
    public function setIdade($i){
         $this->idade = $i;
    }

    public function getAltura(){
        return $this->altura; 
    }    
    public function setAltura($a){
        $this->altura = $a;
    }
    
    public function getPeso(){
        return $this->peso; 
    }    
    public function setPeso($p){
        $this->peso = $p;
        $this->setCategoria();
    }

    public function getCategoria(){
        return $this->categoria; 
    }
        
    private function setCategoria(){
        if($this->getPeso() < 52.2){
            $this->categoria = "invalido";
        }elseif($this->getPeso() <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
        }
        elseif($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "inválido";
        }
    }

     public function getVitorias(){
        return $this->vitorias; 
     }    
     public function setVitorias($v){
         $this->vitorias = $v;
     }

     public function getDerrotas(){
        return $this->derrotas; 
     }    
     public function setDerrotas($d){
         $this->derrotas = $d;
     }

     public function getEmpates(){
        return $this->empates; 
     }    
     public function setEmpates($e){
         $this->empates = $e;
     }
       


}

?>