<?php
class calculation
{
    public $a, $b, $c; //properties
   
    function sum()  //method
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub()  //method
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculation();

$c1->a = 10;
$c1->b = 15;

echo $c1->sum(); 

echo "<br>";

echo $c1->sub();

