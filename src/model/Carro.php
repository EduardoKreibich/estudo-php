<?php

require_once 'Veiculo.php';

 class Carro extends Veiculo{
    private int $brand;


    public function __construct(
         string $model, 
         string $color, 
         int $year
        )
    {
        parent::__construct(
            $model, 
            $color, 
            $year
        );

        $this->brand = [
            'Hb20' => 'Hyndai',
            'Civic' => 'Honda',
            'X1' => 'BMW',
        ];
    }

    public function selectColor(){
        return $this->color;
    }

    public function changeColor( string $color){
        return $this->color = $color;
    }

    public function ageCar(){
        $date = new DateTime('now');
        return $date->format('Y') - $this->year;
    }

    public function readBrand(){
        return $this->brand[$this->model];
    }
}