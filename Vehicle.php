<?php
abstract class Vehicle
{
    protected $brand;
    private $engineOn = false;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    // Abstract method (forces subclasses to implement)
    abstract public function startEngine();
    // abstract public function startEngine1();

    // Encapsulation via private property
    public function toggleEngine($status)
    {
        $this->engineOn = $status;
        echo $this->brand . " engine is now " . ($status ? "on" : "off") . "\n";
    }

    public function getBrand()
    {
        return $this->brand;
    }
}
