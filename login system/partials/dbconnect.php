<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'userlogin';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
