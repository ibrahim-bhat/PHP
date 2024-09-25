<!-- An interface in PHP is like a contract that defines a set of methods a class must implement. It only declares methods, but doesn't provide any implementation. Any class that implements the interface must define the methods declared in the interface.
 
we cant make any objects for interface

-->


<?php
// First interface
interface Drivable
{
    public function startEngine();
}

// Second interface
interface Flyable
{
    public function takeOff();
}

// A class implementing both interfaces
class FlyingCar implements Drivable, Flyable
{
    public function startEngine()
    {
        echo "Starting the car engine...\n";
    }

    public function takeOff()
    {
        echo "Taking off into the sky...\n";
    }
}

$flyingCar = new FlyingCar();
$flyingCar->startEngine(); // Output: Starting the car engine...
$flyingCar->takeOff();     // Output: Taking off into the sky...

?>