<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crudapp";

    try {
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if ($conn) {
            echo "";
        }
    } catch (mysqli_sql_exception $e) {
        die("Connection failed: " . $e->getMessage());
    }

    $sql = "INSERT INTO details (sno, name, email, date) VALUES (NULL, '$name', '$email', current_timestamp())";
    $result = mysqli_query($conn, $sql);
}
