<?php


abstract class Veiculo {
    public function __construct(
        protected string $model,
        protected string $color,
        protected int $year,
    )
    {
        
    }

    abstract public function ageCar();
    abstract public function readBrand();
    abstract public function selectColor();
    abstract public function changeColor(string $color);
}