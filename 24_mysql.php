<?php
echo "Welcome to the stage where we are ready to get connected to a database <br>";
/* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO

MySQLi:  MySQLi is an open-source relational database management system that is used on the web. This database system is reliable for both small and large applications.

PDO: PHP Data Object is a PHP extension that defines a lightweight and consistent interface for accessing a database in PHP. It is a set of PHP extensions that provide a core PDO class and database-specific driver. 

*/
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful";
}
