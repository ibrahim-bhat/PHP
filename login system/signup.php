<?php
require 'partials/dbconnect.php';
$showalert = false;
$showerror = false;
$exist = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm-password'];

    $existSql = "SELECT * FROM `user` WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numexistRow = mysqli_num_rows($result);
    if ($numexistRow > 0) {
        $exist = true;
    } else {

        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user` (`username`, `email`, `password`, `time`) VALUES ( '$username', '$email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showalert = true;
            }
        } else {
            $showerror = true;
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php require "partials/navbar.php"   ?>
    <?php
    if ($showalert) {
        echo "<div style='color: white; background-color: green;  font-size: 1.6rem; margin-top: 10px;'>Signup successful! Now you can login your account</div>";
    }

    ?>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="signup.php" method="post">
            <label for="username">Username:</label>
            <input type="text" maxlength="11" id="username" name="username" placeholder="Enter your username" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            <label for="password">Password:</label>
            <input type="password" maxlength="255" id="password" name="password" placeholder="Enter your password" required>
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
            <?php if ($showerror) {
                echo "<div style='color: red; font-size: 1rem; margin-top: 2px; margin-bottom: 20px;'>Password dosen't match</div>";
            }
            if ($exist) {
                echo "<div style='color: red; font-size: 1rem; margin-top: 2px; margin-bottom: 20px;'>Username or Email already exists</div>";
            }
            ?>
            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>

    </div>
</body>

</html>