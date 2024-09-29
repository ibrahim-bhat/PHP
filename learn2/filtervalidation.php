<!-- PHP offers several built-in filter functions to validate different types of data:

filter_var(): This function applies a specified filter to a variable and returns the filtered value or false if the validation fails.
filter_input(): This function combines input filtering and validation in a single step. It retrieves an input value from a specified source (e.g., $_GET, $_POST, $_COOKIE) and applies a filter to it.
Common Filter Constants

Here are some commonly used filter constants:

FILTER_VALIDATE_EMAIL: Validates an email address.
FILTER_VALIDATE_URL: Validates a URL.
FILTER_VALIDATE_INT: Validates an integer.
FILTER_VALIDATE_FLOAT: Validates a floating-point number.
FILTER_VALIDATE_BOOLEAN: Validates a boolean value.
FILTER_SANITIZE_EMAIL: Sanitizes an email address by removing potentially harmful characters.
FILTER_SANITIZE_URL: Sanitizes a URL by removing potentially harmful characters.
FILTER_SANITIZE_STRING: Sanitizes a string by removing potentially harmful characters.
FILTER_SANITIZE_NUMBER_INT: Sanitizes a number to an integer.
FILTER_SANITIZE_NUMBER_FLOAT: Sanitizes a number to a floating-point number. -->

<?php

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
if ($email === false) {
    echo "Invalid email address.";
} else {
    echo "Valid email address: " . $email;
}

// age 
$age = filter_var($_POST['age'], FILTER_VALIDATE_INT, array('options' => array('min_range' => 0, 'max_range' => 120)));
if ($age === false) {
    echo "Invalid age.";
} else {
    echo "Valid age: " . $age;
}

//folating pointer 
$price = filter_var($_POST['price'], FILTER_VALIDATE_FLOAT, array('flags' => FILTER_FLAG_ALLOW_FRACTION));
if ($price === false) {
    echo "Invalid price.";
} else {
    echo "Valid price: " . $price;
}



?>