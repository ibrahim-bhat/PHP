<?php
echo "Assocaitive Array";

//an associative array is a data structure that stores key-value pairs, similar to a numeric array but with a different index. The index in an associative array is a string that links the key to the value
//ex   $arr = array("key1"=>"value", "key2"=>"value", "key3"=>"value");

//A numeric array is a variable type that stores multiple values of the same data type in a single variable 
//Numeric array are index array


echo "Welcome to associative arrays in php ";
// These are called indexed arrays:
// $arr = array('this', 'that', 'what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2]; 


// Associative arrays
$favCol = array(
    'shubham' => 'red', 'rohan' => 'green',
    'harry' => 'brown', 8 => 'this'
);

// echo $favCol['harry'];
// echo "<br>";
// echo $favCol['rohan'];
// echo "<br>";
// echo $favCol[8]; 
foreach ($favCol as $key => $value) {
    echo "<br>Favorite color of $key is $value";
}


/* Difference between Associative Arrays and Indexed Arrays

The simple arrays (without key) are also called indexed arrays because the elements of this array are present on integer indexes. These arrays cannot store keys against their elements. On the other hand, the associative arrays are capable of storing keys against each element. Therefore, the associative arrays can be more useful while assigning some properties to variables.*/
?>