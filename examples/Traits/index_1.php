<?php
trait A
{
    public function greetFromA()
    {
        echo "Hello from A\n";
    }
}

trait B
{
    public function greetFromB()
    {
        echo "Hello from B\n";
    }
}

class MyClass
{
    use A, B;
}

$obj = new MyClass();
$obj->greetFromA();
$obj->greetFromB();
