<?php
    declare(strict_types = 1);

require_once "gato.php";
require_once "cachorro.php";
require_once "interface.php";



$gatoA = new Gato("Miau","Persa"); #Inserindo o som e a raça do gato e guardando na variável $gatoA
$gatoB = new Gato("Miau","Siames"); #Inserindo o som e a raça do gato e guardando na variável $gatoB
$cachorroA = new Cachorro("AUAU","Bulldog"); #Inserindo o som e a raça do cachorro e guardando na variável $cachorroA
$cachorroB = new Cachorro("AUAU","Dalmata"); #Inserindo o som e a raça do cachorro e guardando na variável $cachorroB

