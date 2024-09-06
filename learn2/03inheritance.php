<?php
//Inheritance is a core concept in PHP's object-oriented programming (OOP) that allows a child class to inherit properties and methods from its parent class

class employee
{
    public $name, $age, $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    function info()
    {
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee Age : " . $this->age . "<br>";
        echo "Employee Salary : " . $this->salary . "<br>";
    }
}
//Now, let's create a child class called manager that inherits from the employee class
class manager extends employee{
    public $ta = 1000 , $phone = 300 , $totalsal;

    function info()
    {
        $this->totalsal = $this->salary + $this->ta + $this->phone;
        echo "<h3>Manager Profile</h3>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee Age : " . $this->age . "<br>";
        echo "Employee Salary : " . $this->totalsal . "<br>";
    }
}

$e1 = new employee("ibrahim", 20, 10000);
$e2 = new manager("Khushboo", 19, 15000);


$e1->info();
$e2->info();


?>