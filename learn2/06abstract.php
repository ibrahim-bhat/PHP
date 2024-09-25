<!-- An abstract class in PHP is a class that cannot be instantiated directly. It can contain abstract methods (methods without implementation) and regular methods. Abstract methods must be implemented by any class that extends the abstract class. -->

<?php
// Abstract class
abstract class Animal
{
    // Abstract method (no implementation)
    abstract public function makeSound();

    // Regular method
    public function sleep()
    {
        echo "Sleeping...\n";
    }
}

// Concrete class extending the abstract class
class Dog extends Animal
{
    // Implementing the abstract method
    public function makeSound()
    {
        echo "Bark!\n";
    }
}

// Usage
$dog = new Dog();
$dog->makeSound();  // Output: Bark!
$dog->sleep();      // Output: Sleeping...
?>