<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbibrahim018";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());   //The die() function in PHP is used to immediately stop the execution of a script and print a message. It's often used to handle critical errors or to provide custom error messages before abruptly stopping the script.
} else {
    echo "Connection was successful<br>";
}

//select a database
// $db_selected = mysqli_select_db($conn , $database);
// if (!$db_selected){
//     die ("Can't use database : " . mysqli_error($conn));
// }

// Create a table in the table
$sql2 = "CREATE TABLE `dbibrahim018`.`checkout` (`name` VARCHAR(25) NOT NULL , `address` VARCHAR(40) NOT NULL , `email` VARCHAR(30) NOT NULL , `phone number` INT(14) NOT NULL )";
$result = mysqli_query($conn,$sql2);

//checking the db creation success
// if ($result) {
//     echo "Database created successfully<br>";
// } else {
//     echo "Database creation failed<br>" . mysqli_error($conn);
// }

// Check for the table creation success
if(!$result){
    die("The table was not created successfully because of this error ---> " . mysqli_error($conn));
}
else{
    echo "The table was created successfully!<br>";
}
  
?>