<?php
session_start();
$user = false;
if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    header('location:login.php');
    exit;
} else {
    $user = true;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_SESSION['username']; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php require "partials/navbar.php"   ?>
    <div class="container">
        <?php
        if ($user) {
            echo "<h2>Welcome," . $_SESSION['username']  . "</h2>";
        }
        ?>
        <p>You have successfully logged in.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>