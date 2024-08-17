<?php
include 'partials/_dbconnect.php';
$login = false;
$showerror = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['form_type']) && $_POST['form_type'] == 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `user-account` WHERE user_email = '$email' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $row['user_password'])) {
                    $login = true;
                    // session_start();
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['login'] = true;
                    // $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['user_email'] = $email;
                    header("Location: /php/php/ForumWeb/index.php");
                } else {
                    $showerror = true;

                }
            }
        }
    }
}
?>

<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeLoginModal">&times;</span>
        <h2>Login</h2>
        <form id="loginForm" action="" method="post">
            <input type="hidden" name="form_type" value="login">
            <input type="email" id="email" name="email" placeholder="Email" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <?php
            if ($showerror) {
                echo "<div style='color: red;  font-size: 1rem; margin-top: 10px;'>invalid details !</div>";
            }
            ?>
            <button type="submit" class="btn">Login</button>

        </form>
    </div>
</div>
<?php
if ($login) {
    echo "<div id='alertBox' class='alert-box'>You are now logged in.</div>";
}
?>