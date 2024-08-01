
<?php
//-------Strings     Most of the time, we are dealing with string-type data, and hence, to manipulate it, we should have an excellent grip on string functions.
$name = 'ibrahim is a good boy';
echo "<br>";
echo $name;
echo '<br>';
echo 'the length of my string is ' . strlen($name);  // here we get he length of string  by using strlen and we concatinate these mulitple strings by using dot . between them 

echo '<br>';
echo str_word_count($name); // here we get the length of words
echo "<br>";
echo strrev($name); // it is used for reverse of string
echo "<br>";
echo strpos($name, 'boy'); // it is used for find the position of string
echo "<br>";
echo str_replace("ibrahim", "ziddi", $name); // it is used for replacing of string
echo "<br>";
echo str_repeat($name, 4); // for repeating any string mutliple times
echo "<br>";
echo "<pre>";    //per is a html tag used priting writing content as it is
echo rtrim("    this is a good boy     ");  //used for right trim the contant
echo "<br>";
echo ltrim("    this is a good boy     ");   //used for left trim the contant
echo "</pre>";



?>