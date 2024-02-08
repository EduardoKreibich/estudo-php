<?php

require_once './model/Carro.php';


$carroHbVinte = new Carro('Hb20', 'Azul', 2021);


echo print_r($carroHbVinte);

$carroHbVinte->changeColor('Verde');

echo $carroHbVinte->selectColor();

echo $carroHbVinte->ageCar();
