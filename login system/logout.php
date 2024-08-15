<?php
    session_start();

    session_unset();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="./styles.css"> 
</head>

<body>
    <?php require "partials/navbar.php"   ?>
    <div class="container">
        <h1>You have been logged out</h1>
        <p><a href="login.php">Click here to log in again</a></p>
    </div>
</body>

</html>