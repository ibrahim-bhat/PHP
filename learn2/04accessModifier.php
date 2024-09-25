<?php
/*access modifiers are keywords that control where properties and methods can be accessed. The three access modifiers are:
Public: The property or method can be accessed from anywhere. This is the default setting.
Protected: The property or method can be accessed within the class and by classes derived from that class.
Private: The property or method can only be accessed within the class. 
 
Access modifiers are used in object-oriented programming (OOP) to specify the accessibility of methods, classes, constructors, and other members of a class. They are prefixed to the declaration of these elements to define their visibility scope. */

class base
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    protected function show()
    {
        echo $this->name;
    }
}

class derived extends base
{
    public function get()
    {
        echo "Your Name : " . $this->name . "<br>";
    }
}


$e1 = new derived("ibrahim");
// $e1->name = "ibrahim";
$e1->get();
