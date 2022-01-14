<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\BenzCar;





class CarAbstractFactory{
    private $price;
    private $tax = 10000;

    public function __construct($price){
        $this->price = $price;
    }

    public function createBMWCare() : BMWCar{
        return new BMWCar($this->price); 
    }

    public function createBenzoCar() : BenzCar{
        return new BenzCar($this->price,$this->tax); 
    }

}