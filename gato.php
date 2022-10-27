<?php
require_once "interface.php";


    class Gato implements Animal {
        private $som;
        private $raca;
        
        
        #Retornar o "valor" do som do gato
        public function fazerSom($som){
            return $this->som = $som;
        }
        
         #Inserir o "valor" da raça do gato
         public function setRaca($raca){
            $this->raca = $raca;
        }

        #Retornar o "valor" da raça do gato
        public function getRaca($raca){
            return $this->raca = $raca;
        }
    }
    
    