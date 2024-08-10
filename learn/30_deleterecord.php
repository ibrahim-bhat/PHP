<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbibrahim02";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful<br>";
}

$deleterec = "proibu9@gmail.com";
$sql = "DELETE FROM `contact` WHERE `email` = '$deleterec'"; 
$result = mysqli_query($conn, $sql);

// Check if query was successful
if ($result) {
    echo "Record deleted successfully";
} else {
    $err = mysqli_error($conn);
    echo "Sorry we could not delete the record --> $err";
}
//affected rows
$aff = mysqli_affected_rows($conn);  // returns the number of rows affected by the previous SELECT, INSERT, UPDATE, REPLACE, or DELETE query
echo "<br>Number of affected rows: $aff <br>";

?>
