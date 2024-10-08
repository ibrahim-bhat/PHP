<?php
// In PHP, the constructor function is a special method that is automatically called when a new object is created from a class. The constructor function is called __construct() and it is used to initialize an object's properties
class person
{
    public $name, $age;

    function __construct($name = "No name " , $age = "0")
    {
        $this->name = $name;
        $this->age = $age;
    }

    function show()
    {
        echo "name is $this->name and age is $this->age <br>";
    }
}

$c1 = new person("ibrahim" , "20");
$c2 = new person("khushboo" , "19");
$c3 = new person();


// $c1->name = "ibrahim";
// $c1->age = "20";

$c1->show();
$c2->show();
$c3->show();

?>
