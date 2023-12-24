<?php

class Carro{
    var $marca; 
    var $ano; 
    var $velocidade; 

    function verificar(){
        if ($this->velocidade >= 100){
            echo "o carro <b> $this->marca </b> de <b> $this->ano </b> está a andar com <b> $this->velocidade </b>"."/h <br/> Ele pode andar normalmente"; 
        } else {
            echo "o carro <b>$this->marca</b> de <b>$this->ano</b> está a andar com <b>$this->velocidade</b>"."/h <br/> Ele está multado"; 
        }
    }
}
?>