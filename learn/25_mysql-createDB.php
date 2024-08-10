<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());   //The die() function in PHP is used to immediately stop the execution of a script and print a message. It's often used to handle critical errors or to provide custom error messages before abruptly stopping the script.
} else {
    echo "Connection was successful<br>";
}

//Creating a db
$sql = "CREATE DATABASE dbibrahim02";
$result = mysqli_query($conn, $sql);

//checking the db creation success
    if ($result){
        echo "Database created successfully<br>";
    }else {
        echo "Database creation failed<br>" . mysqli_error($conn);
    }

?>