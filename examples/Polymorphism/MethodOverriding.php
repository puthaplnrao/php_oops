<?php
class Animal
{
    public function speak()
    {
        echo "Animal sound\n";
    }
}

class Dog extends Animal
{
    // Overriding the parent method
    public function speak()
    {
        echo "Dog barks!\n";
    }
}

$dog = new Dog();
$dog->speak(); // Output: Dog barks!
