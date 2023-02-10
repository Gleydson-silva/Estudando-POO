<?php

class Conta {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->setStatus(false);
        $this->setSaldo(0);
    }

    public function abrirConta($t){
        if($this->status == false){
            $this->status = true;
            if($t = "cc"){
                $this->setTipo($t);
                $this->depositar(50);
            }elseif($t = "cp"){
                $this->setTipo($t);
                $this->depositar(150);
            }else{
                echo "Tipo de conta não é valido <br>";
            }
               
        }else{
            echo "A conta já está aberta <br>";
        }
       
        
    }
    public function fecharConta(){
        if($this->saldo > 0){
            echo "não foi possivel fechar a conta, ainda tem saldo <br>";
        }elseif($this->saldo < 0){
            echo "não foi possivel fechar a conta, saldo negativo: {$this->getSaldo()} <br>";
        }
        else{
            $this->status = false;
        }
       
       
    }
    public function depositar($d){
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() + $d);
        }
        else{
            echo "A conta não está aberta  <br>";
        }
        
    }
    
    public function sacar($s){
        if($this->getStatus() == true){
            if($this->getSaldo() <= $s){
                $this->setSaldo($this->getSaldo() - $s);
            }else{
                echo "não tem dinheiro suficiente na conta saldo de: " . $this->getSaldo() . "<br>"; 
            }
            
        }
        else{
            echo "A conta não está aberta";
        }
    }
    public function pagarMensal(){
        if($this->tipo == "cc"){
            $this->setSaldo($this->getSaldo() - 12); 
        }
        elseif($this->tipo == "cp"){
            $this->setSaldo($this->getSaldo() - 20); 
        }
        else{
            echo "conta não tem nenhum tipo <br>";
        }
    }

    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($n){
        $this->numConta = $n;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }

    public function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($st){
        $this->status = $st;
    }


}

?>