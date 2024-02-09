<?php

require_once './model/Carro.php';
require_once './model/Caminhao.php';


$carroHbVinte = new Carro('Hb20', 'Azul', 2021);
$caminhao = new Caminhao('foodtruck', 'Azul', 1998, 200);


echo print_r($carroHbVinte);

$carroHbVinte->changeColor('Verde');

echo $carroHbVinte->selectColor();

echo $carroHbVinte->ageCar();

echo $carroHbVinte->readBrand();

echo $caminhao->ageCar();
echo $caminhao->tamanhoBau();