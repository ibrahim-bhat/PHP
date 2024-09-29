<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>

<?php
session_start();

// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];


// Validate credentials (replace with your actual authentication logic)
if ($username === "your_username" && $password === "your_password") {
    // Set session variables
    $_SESSION['username'] = $username;
    $_SESSION['logged_in'] = true;

    // Set a cookie with a longer expiration time
    setcookie('remember_me', $username, time() + 3600 * 24 * 30, "/"); // 30 days
    // remember_me cookie is used to maintain the user's login state across browser sessions.

    // Redirect to the protected area
    header("Location: protected_area.php");
    exit();
} else {
    // Handle login failure
    echo "Invalid username or password.";
}

$conn->close()
?>

<!-- protected_area.php -->
<?php
session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header("Location: login.php");
    exit();
}

// Display protected content here
echo "Welcome, " . $_SESSION['username'];
?>