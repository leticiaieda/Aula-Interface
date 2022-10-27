<?php

require_once "interface.php";

    class Cachorro implements Animal {
        private $som;
        private $raca;
        
        #Retornar o "valor" do som do cachorro
        public function fazerSom($som){
            return $this->som = $som;
        }

        
        #Inserir o "valor" da raça cachorro
        public function setRaca($raca) {
            $this->raca = $raca;
        }

        #Retornar o "valor" da raça do cachorro
        public function getRaca($raca) {
            return $this->raca = $raca;
        }
        
        
    }