<?php
if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
    $logined = true;
} else {
    $logined = false;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="/php/php/login%20system/welcome.php">Home</a></li>
            <?php
            if ($logined) {
                echo '<li><a href="/php/php/login%20system/login.php">Login</a></li>';
                echo '<li><a href="/php/php/login%20system/signup.php">Sign Up</a></li>';
            } else {
                echo '<li><a href="/php/php/login%20system/logout.php">Logout</a></li>';
            }
            ?>
        </ul>
    </nav>
</body>

</html>