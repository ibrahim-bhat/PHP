<?php
require 'partials/dbconnect.php';
$login = false;
$showerror = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $sql = "SELECT * FROM user where email = '$email' AND password = '$password'";
    $sql = "SELECT * FROM user where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $login = true;
                session_start();
                $row = mysqli_fetch_assoc($result);
                $_SESSION['login'] = true;
                $_SESSION['username'] = $row['username'];
                header("location: welcome.php");
                exit;
            } else {
                $showerror = true;
            }
        }
    } else {
        $showerror = true;
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php require "partials/navbar.php"
    ?>
    <?php
    if ($login) {
        echo "<div style='color: white; background-color: green;  font-size: 1.6rem; margin-top: 10px;'>You are logged in !</div>";
    }
    ?>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <?php
            if ($showerror) {
                echo "<div style='color: red;  font-size: 1rem; margin-top: 10px;'>invalid details !</div>";
            }
            ?>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="./signup.php">Sign up</a></p>
    </div>
</body>

</html>