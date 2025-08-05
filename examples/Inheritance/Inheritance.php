
<?php
class Animal
{
    public function speak()
    {
        echo "Animal sound";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo "Woof!";
    }
}

$dog = new Dog();
$dog->speak(); // Inherited
$dog->bark(); // Dog's own method