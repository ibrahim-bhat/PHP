<?php

echo "<h1>Scope-local-global-variables</h1><br>";

$a = 98; // Global Variable
$b = 9;

function printValue()
{
    // $a = 97; // Local Variable
    global $a, $b; // Give me the access to this global variable
    $a = 100;
    $b = 1000;
    echo "<br>The value of your variable a is $a and b is $b";
}

echo $a;
printValue();
echo "<br>The value of your variable a is $a and b is $b";
echo "<br>";
// echo var_dump($GLOBALS); 
echo var_dump($GLOBALS["a"]);//gives all varibles present in global scope
echo var_dump($GLOBALS["b"]);

?>