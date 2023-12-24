<?php
    class Caneta{
        private $modelo; 
        private $cor; 
        private $ponta;
        private $tampada; 
        
        
       


        public function __construct($m, $c, $p, $ta){ 
            $this->modelo=$m; 
           $this->cor=$c; 
           $this->ponta=$p; 
           $this->tampada=$ta;
           $this->setTampada(true); 
        }



        function getModelo() {
            return $this->modelo; 
        }

        function getPonta(){
            return $this->ponta; 
        }

         function getTampada(){
            return $this->tampada; 
         }

         function setModelo($m){
            $this->m; 
         }

         function setCor($c){
            $this->c;
         }
          
         function setPonta($p){
            $this->p;
         }
         
         function setTampada($tampada){
            $this->tampada; 
         }


        
    }
?>