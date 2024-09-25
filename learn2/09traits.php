<!-- traits are a collection of methods that can be used in multiple classes to reuse code and reduce redundancy -->

<?php
trait HelloWorld
{
    public function sayHello()
    {
        echo 'Hello World!';
    }
}

class TheWorldIsNotEnough
{
    use HelloWorld;
    public function sayHello()
    {
        echo 'Hello Universe!';
    }
}

$o = new TheWorldIsNotEnough();
$o->sayHello();
?>