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


include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['recordId'])) {
        // Handle Edit
        $id = $_POST['recordId'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql1 = "UPDATE details SET name='$name', email='$email' WHERE sno=$id";
        mysqli_query($conn, $sql1);
    }
}

if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    $sql2 = "DELETE FROM details WHERE sno=$sno";
    mysqli_query($conn, $sql2);
}
header('Location: index.php');
exit;

?>