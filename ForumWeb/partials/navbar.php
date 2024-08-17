
<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    $logined = true;
} else {
    $logined = false;
}
?>

<nav class="navbar">
    <div class="container">
        <a href="index.php" class="logo">ForumWeb</a>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="forum.php">Forum</a></li>
            <?php
            if (!$logined) {
                echo '<li><button id="openLoginModal" class="btn">Login</button></li>
            <li><button id="openSignupModal" class="btn">Sign Up</button></li>';
            } else {
                echo '<li><span style="color: orange;">Welcome, ' . htmlspecialchars($_SESSION['user_email']) . '</span></li> ';
                echo '<li><a href="partials/_logout.php"><button id="logout" class="btn">Logout</button></a></li>';
                
            }
            ?>

        </ul>
    </div>
</nav>


<?php include 'partials/login.php'; ?>
<?php include 'partials/signup.php'; ?>