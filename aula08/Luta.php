<?php
require_once '../aula08/Lutador.php'; 

class Luta{
    //atributos
    private $desafiado; 
    private $desafiante;  
    private $rounds; 
    private $aprovada; 

    //métodos 
    public function marcarLuta($l1, $l2){
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
            $this->aprovado = true; 
            $this->desafiado = $l1; 
            $this->desafiante = $l2;  
        } else {
            $this->aprovado = false; 
            $this->desafiado = null; 
            $this->desafiante = null; 
        }
    }

    public function lutar(){ 

        if ($this->aprovada){ 
            $this->desafiado->apresentar();  
            $this->desafiante->apresentar(); 
            $vencedor = rand(0, 2); 

            switch ($vencedor){
                case 0: //empate 
                    echo "<p>Empatar luta</p>"; 
                    $this->desafiado->empatarLuta(); 
                    $this->desafiante->empatarLuta();  
                    break; 

                case 1: //desafiado vence 
                    echo "<p>".$this->desafiado->getNome()." venceu </p>";
                    $this->desafiado->ganharLuta(); 
                    $this->desafiante->perderLuta(); 
                    break; 

                case 2: //desafiante vence 
                    echo "<p>".$this->desafiante->getNome()." venceu</p>"; 
                    $this->desafiante->ganharLuta(); 
                    $this->desafiado->perderLuta(); 
                    break; 
            } 
        } else {
            echo "<p> Luta não pode acontecer </p>";    
        }
    }

    //getters
    function getDesafiado(){
        return $this->desafiado; 
    }

    function getDesafiante(){
        return $this->desafiante; 
    }

    function getRounds(){
        return $this->rounds; 
    }

    function getAprovada(){
        return $this->aprovada; 
    }

    //setters
    function setDesafiado($desafiado){
        $this->desafiado = $desafiado; 
    }

    function setDesafiante($desafiante){
        $this->desafiante = $desafiante; 
    }

    function setRounds($rounds){
        $this->rounds = $rounds; 
    }

    function setAprovado($aprovado){
        $this->aprovado = $aprovado; 
    }
}