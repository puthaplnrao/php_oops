<?php
class Calculator
{
    public function __call($name, $arguments)
    {
        if ($name == 'add') {
            $count = count($arguments);
            if ($count == 2) {
                return $arguments[0] + $arguments[1];
            } elseif ($count == 3) {
                return $arguments[0] + $arguments[1] + $arguments[2];
            } else {
                return "Unsupported number of arguments";
            }
        }
    }
}


class StaticCalculator
{
    public static function __callStatic($name, $arguments)
    {
        if ($name === 'add') {
            $count = count($arguments);
            if ($count == 2) {
                return $arguments[0] + $arguments[1];
            } elseif ($count == 3) {
                return $arguments[0] + $arguments[1] + $arguments[2];
            } else {
                return "Unsupported number of arguments.";
            }
        } else {
            return "Method '$name' not found.";
        }
    }
}

$calc = new Calculator();
echo $calc->add(5, 10) . PHP_EOL;
echo $calc->add(1, 2, 3) . PHP_EOL;
echo $calc->add(1) . PHP_EOL;


// Usage
echo StaticCalculator::add(2, 3);
echo "\n";
echo StaticCalculator::add(1, 2, 3);
echo "\n";
echo StaticCalculator::add(10);
