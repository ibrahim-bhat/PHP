<?php
    //overriding properties and methods allows for the creation of more specialized and flexible object-oriented code

    class base {
        public $name = "parent class";
    }

    class derived extends base {
        public $name = "child class";
    }

    $res = new derived(); // Create an instance of the derived class

    echo $res->name; // This will output "child class"
?>