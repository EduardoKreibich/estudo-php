<?php

class Carro {
    private int $brand;


    public function __construct(
        private string $model, 
        private string $color, 
        private int $year
        )
    {

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