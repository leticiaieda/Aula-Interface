<?php

    #Inserindo os metodos da Interface que serão exigidas nas classes: Gato e Cachorro 
    interface Animal {
        public function fazerSom($som);        
        public function getRaca($raca);
        public function setRaca($raca);
    }