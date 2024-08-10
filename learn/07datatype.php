<?php
//-----Datatypes
// 1) String 2)Integer 3)Float 4)Boolean 5)Object 7)Array 8)Null

// String data is basically a sequence of characters which can be numeric characters or alphabets. string is a data type
echo "<br>My name is $myName and my Age is $myAge ";

//An integer is a data type, which holds the numeric data such as 577, -998, etc.
$inccome = 1200;
echo "<br>";
echo $inccome;

//In the integer data type, we were unable to store decimals. To store decimals, we have another data type called float, which is capable of storing decimal values like 3.55. Other examples of the float data type are 566.89, - 989.0009, etc.
$float = 12.99;
echo "<br>";
echo $float;

//Boolean is a data type representing only two possible states that can be either true or false. For example, $x = true; and $y = false represents boolean variables with true and false as their values respectively
$x = true;
$y = false;
echo "<br>";
echo var_dump($x);
//var_dump To dump information about a variable, use the var_dump in PHP. This function provides structured data about the specified variable, including its type and value.
echo "<br>";
echo $y;

//“Object” is basically an instance of a class that is a template for creating such user-defined objects.

//“Array” has the property of storing multiple values inside a single variable, allowing us to perform various tasks using them. For example,
$friends = array("wahid", "faisal", "khushboo");
echo "<br>";
echo var_dump($friends);
echo "<br>";
echo "helo my gf is $friends[2]";

//Null
$name = Null;
echo "<br>";
echo var_dump($name);
?>