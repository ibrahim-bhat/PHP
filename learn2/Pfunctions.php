<?php
// Here’s a brief explanation of each PHP function you mentioned, along with simple examples:

// 1. PHP String strrev & str_shuffle Functions

// strrev(): Reverses a string.
$string = "Hello World";
echo strrev($string); // Output: "dlroW olleH"

// str_shuffle(): Randomly shuffles the characters in a string.
$string = "abcdef";
echo str_shuffle($string); // Output: "edbcfa" (random order)


// 2. PHP String str_pad & str_repeat Functions

// str_pad(): Pads a string to a certain length with another string.
$string = "Hello";
echo str_pad($string, 10, "."); // Output: "Hello....."

// str_repeat(): Repeats a string a specified number of times.
$string = "Hello";
echo str_repeat($string, 3); // Output: "HelloHelloHello"


// 3. PHP String trim & chop Functions

// trim(): Removes whitespace or other characters from the beginning and end of a string.
$string = "  Hello World  ";
echo trim($string); // Output: "Hello World"

// chop(): An alias for rtrim(), it removes whitespace or other characters from the end of a string.
$string = "Hello World  ";
echo chop($string); // Output: "Hello World"


// 4. PHP String addslashes & stripslashes Functions

// addslashes(): Adds backslashes before characters that need to be escaped in a database query ('", "\", NULL).
$string = "It's a good day";
echo addslashes($string); // Output: "It\'s a good day"

// stripslashes(): Removes backslashes added by addslashes().
$string = "It\'s a good day";
echo stripslashes($string); // Output: "It's a good day"


// 5. PHP htmlentities & htmlspecialchars Functions

// htmlentities(): Converts characters to HTML entities (e.g., & to &amp;).
$string = "Tom & Jerry";
echo htmlentities($string); // Output: "Tom &amp; Jerry"

// htmlspecialchars(): Converts special characters to HTML entities but leaves some (e.g., &, <, >, ").
$string = "<b>Tom & Jerry</b>";
echo htmlspecialchars($string); // Output: "&lt;b&gt;Tom &amp; Jerry&lt;/b&gt;"


// 6. PHP md5 & sha1 Functions

// md5(): Generates a 32-character hexadecimal hash (used for hashing strings).
$string = "password";
echo md5($string); // Output: "5f4dcc3b5aa765d61d8327deb882cf99"

// sha1(): Generates a 40-character hexadecimal hash (more secure than md5).
$string = "password";
echo sha1($string); // Output: "5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8"


// 7. PHP convert_uuencode & convert_uudecode Functions

// convert_uuencode(): Encodes a string using the uuencode algorithm.
$string = "Hello World";
echo convert_uuencode($string); // Output: "0V%T;W)T(&)Y(&UA8FQE(&ES('1I;G1A=&EO;B!\n"

// convert_uudecode(): Decodes a uuencoded string.
$encoded = "0V%T;W)T(&)Y(&UA8FQE(&ES('1I;G1A=&EO;B!\n";
echo convert_uudecode($encoded); // Output: "Hello World"


// 8. PHP bin2hex & hex2bin Functions

// bin2hex(): Converts binary data to hexadecimal representation.
$string = "Hello";
echo bin2hex($string); // Output: "48656c6c6f"

// hex2bin(): Converts hexadecimal data to binary.
$hex = "48656c6c6f";
echo hex2bin($hex); // Output: "Hello"


// 9. PHP chr & ord Functions

// chr(): Returns a character from the specified ASCII value.
echo chr(65); // Output: "A"

// ord(): Returns the ASCII value of the first character of a string.
echo ord("A"); // Output: 65


// 10. PHP strip_tags & wordwrap Functions

// strip_tags(): Strips HTML and PHP tags from a string.
$string = "<b>Hello</b> <i>World</i>";
echo strip_tags($string); // Output: "Hello World"

// wordwrap(): Wraps a string to a given number of characters.
$string = "Hello World, this is a test.";
echo wordwrap($string, 10, "\n"); 
// Output:
// Hello World,
// this is a 
// test.


?>