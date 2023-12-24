<?php

class Caneta{
    public $modelo; 
    public $cor; 
    private $ponta; 
    protected $carga; 
    protected $tampada; 

    public function rabiscar(){
        if ($this->tampada == true) {
            echo "<p>ERRO! não pode rabiscar </p>";
        } else {
           echo "<p> estou rabiscando </p>"; 
        }
        
    }
    
    public function tampar(){
        $this->tampada = true; 
    }

    public function destampar(){
        $this->tampada = false; 
    }
    
}


