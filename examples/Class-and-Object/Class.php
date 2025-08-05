<?php
class Car
{
    public $brand = "Toyota";

    public function drive()
    {
        echo "Driving $this->brand";
    }
}

$car = new Car();   // Creating object
$car->drive();
