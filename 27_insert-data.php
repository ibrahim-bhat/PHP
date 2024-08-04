<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbibrahim018";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

// Variables to be inserted into the table
$name = "ziddi";
$address = "heart";
$phnumber = "1238404545438";
$email = "baba@co"; 

// Sql query to be executed
$sql = "INSERT INTO `checkout` (`name`, `address`, `email`, `phone number`) VALUES ('$name', '$address', '$email', '$phnumber')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if ($result) {
    echo "The record has been inserted successfully successfully!<br>";
} else {
    echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
}
