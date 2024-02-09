<?php

require_once 'Carro.php';

class Caminhao extends Carro{
    public function __construct(
        string $model, 
        string $color, 
        int $year,
        private int $tamanhoBau
        )
    {
        parent::__construct(
            $model,
            $color,
            $year
            
        );
    }

    public function tamanhoBau() {
        return $this-> tamanhoBau;
    }

    public function readBrand(){
        return 'Caminhão ';
    }

    // public function readBrand(){
    //     return $this->brand[$this->model];
    // }
}