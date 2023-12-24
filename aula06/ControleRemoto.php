<?php
require_once'../aula06/Controlador.php';
class ControleRemoto implements Controlador{
    private $volume; 
    private $ligado; 
    private $tocando; 

    public function __construct (){
        $this->volume = 50; 
        $this->ligado = false; 
        $this->tocando = false; 
    }

    //getters
    private function getVolume(){
        return $this->volume; 
    }

    private function getLigado(){
        return $this->ligado; 
    }

    private function getTocando(){
        return $this->tocando; 
    }

    //setters
    private function setVolume($volume){
        $this->volume = $volume; 
    }

    private function setLigado($ligado){
        $this->ligado = $ligado; 
    }

    private function setTocando($tocando){
        $this->tocando = $tocando; 
    }

    //controladores 
    public function ligar(){
        $this->setLigado(true);
    } 

    public function desligar(){
        $this->setLigado(false); 
    } 

    public function abrirMenu(){
        echo "<br> Está ligado?: ".($this->getLigado()?"SIM":"NÃO");
        echo "<br> Está tocando?: ".($this->getTocando()?"SIM":"NÃO"); 
        echo "<br> Volume: ".$this->getVolume(); 
        for($i=0; $i <= $this->getVolume(); $i+=10){
            echo "|"; 
        }
        echo "<br>"; 
    } 

    public function fecharMenu(){
        echo "fechar menu";
    } 

    public function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 10); 
        } else {
            echo "<p>ERRO! Não posso aumentar o volume</p>"; 
        }
    }

    public function menosVolume(){
        if($this->getLigado()){
            $this-->setLigado($this->getVolume() - 5);
        } else {
            echo "<p>ERRO! Não posso diminuir o volume</p>"; 
        }
    } 

    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0); 
        }
    } 

    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50); 
        }
    } 

    public function play(){
        if ($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true); 
        }
    } 

    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->getTocando(false); 
        }
    } 
}


