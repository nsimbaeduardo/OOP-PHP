<?php
class Pessoa{
    private $nome; 
    private $idade; 
    private $sexo; 

    public function fazerAniver(){
        $this->idade ++; 
    }

    public function __construct($nome, $idade, $sexo){
        $this->nome = $nome; 
        $this->idade = $idade; 
        $this->sexo = $sexo; 
    }


    //getters
    function getNome(){
        return $this->nome; 
    }

    function getIdade(){
        return $this->idade; 
    }

    function getSexo(){
        return $this->sexo; 
    }

    //setters
    function setNome($nome){
        $this->nome = $nome; 
    }

    function setIdade($idade){
        $this->idade = $idade; 
    } 

    function setSexo($sexo){
        $this->sexo = $sexo; 
    }
}