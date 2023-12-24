<?php 

class ContaBanco{
    public $numConta; 
    protected $tipo; 
    private $dono; 
    private $saldo; 
    private $status; 

    //o meu construtor 
    public function __construct(){
        $this->setStatus(false); 
        $this->setSaldo(0);
        echo "<p>conta criada com sucesso<p/>"; 
    }

    public function abrirConta($t){
        $this->setTipo($t); 
        $this->setStatus(true);

        if ($t == "CC"){
            $this->setSaldo(50); 
        } elseif ($t == "CP") {
            $this->setSaldo(150); 
        }

         
        

         
    }

    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "<p>Você ainda tem dinheiro, não pode fechar a conta, tem de sacar primeiro <p/>";
        } elseif ($this->getSaldo() <0) {
            echo "<p>Você não pode fechar a conta porque está em débito <p/>"; 
        } else {
            $this->setStatus(false); 
        }
    
    }

    public function depositar($v){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "Depósito de R$$v na conta de ".$this->getDono()."<br>"; 
        } else {
            echo "<p>Conta fechada, não consigo depositar <p/>";
        }
    }

    public function sacar($v){
        if ($this->getStatus()) {
           if ($this->getSaldo() >= $v) {
            $this->setSaldo($this->getSaldo() - $v); 
            echo "<p>Saque de R$$v autorizado na conta de {$this->getDono()}<p/>";
           } else {
            echo"<p>Não pode sacar, saldo insuficiente <p/>";
        }
        } else {
            echo "Não posso sacar de uma conta fechada";
        } 
    }

    public function pagarMensal(){
        if ($this->getTipo() == "CC") {
            $v=12; 
        } elseif ($this->getTipo() == "CP") {
            $v =20;
        }

        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p> Mensalidade de R$$v debitada na conta ".$this->getDono()."<p/>";
        } else {
            echo "<p>Problemas com a conta, não posso cobrar <p/>";
        }
    }

    //inicio get
    function getNumConta(){
        return $this->numConta; 
    }

    function getTipo(){
        return $this->tipo; 
    }

    function getDono(){
        return $this->dono; 
    }

    function getSaldo(){
        return $this->saldo; 
    }

    function getStatus(){
        return $this->status;
    }
    //fim get 



    //inicio set 
    function setNumConta($n){
        $this->numConta=$n; 
    } 

    function setTipo($t){
        $this->tipo=$t; 
    }

    function setDono($d){
        $this->dono=$d; 
    } 

    function setSaldo($s){
        $this->saldo=$s; 
    }

    function setStatus($st){
        $this->status = $st; 
    }
    //fim  set

}




?>