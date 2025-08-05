<?php
abstract class Vehicle
{
    protected $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    abstract public function start();

    public function stop()
    {
        echo "Stopping vehicle\n";
    }
}

class Car extends Vehicle
{
    public function start()
    {
        echo "Starting car: $this->brand\n";
    }
}
$car = new Car("Toyota");
$car->start();
$car->stop();
