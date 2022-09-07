<?php

namespace App\Models;

class Phone
{
    protected string $model;
    protected string $brand;
    protected float $price;
    protected string $color;
    protected string $weight;

    public function __construct($brand, $price, $color, $weight)
    {
        $this->brand = $brand;
        $this->price = $price;
        $this->color = $color;
        $this->weight = $weight;

    }

    public function ring()
    { //не нужный с точки зрения программирования метод
        echo "I'm phone. I can ring";
    }

    public function getModel()
    {
        return $this->model;
    }

    /**
     * Функция, которая устанавливает значения модели
     * @param string $model Модель телефона
     * @return void
     */
    public function setModel(string $model)
    {
        $this->model = $model;
    }
    public function printInfo(){
        echo "Телефон $this->brand $this->model стоит $$this->price ";
    }


}