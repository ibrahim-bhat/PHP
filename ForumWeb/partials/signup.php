<?php
include 'partials/_dbconnect.php';
$passalert = false;
$showalert = false;
$exist = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['form_type']) && $_POST['form_type'] == 'signup') {
        $username = $_POST['signup-username'];
        $email = $_POST['signup-email'];
        $password = $_POST['signup-password'];
        $cpassword = $_POST['signup-cpassword'];

        // Check if username or email already exists
        $existSql = "SELECT * FROM `user-account` WHERE user_name = '$username' OR user_email = '$email'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);

        if ($numExistRows > 0) {
            $exist = true;
        } else {
            // Check if password and confirm password match
            if ($password == $cpassword) {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `user-account` (`user_name`, `user_email`, `user_password`, `timestamp`) VALUES ('$username', '$email', '$hash', current_timestamp());";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $showalert = true;
                }
            } else {
                $passalert = true;
            }
        }
    }
}
?>


<!-- Signup Modal -->
<div id="signupModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeSignupModal">&times;</span>
        <h2>Sign Up</h2>
        <form id="signupForm" action="" method="post">
            <input type="hidden" name="form_type" value="signup">
            <input type="text" maxlength="15" id="signup-username" name="signup-username" placeholder="Username" required>
            <input type="email" id="signup-email" name="signup-email" placeholder="Email" required>
            <input type="password" id="signup-password" name="signup-password" placeholder="Password" required>
            <input type="password" id="signup-cpassword" name="signup-cpassword" placeholder="Confirm Password"
                required>
            <?php
            if ($exist) {
                echo "<div style='color: red; font-size: 1rem; margin-top: 2px; margin-bottom: 20px;'>Username or Email already exists</div>";
            }
            if ($passalert)
                echo "<div style='color: red; font-size: 1rem; margin-top: 2px; margin-bottom: 20px;'>Password didn't match</div>";
            ?>
            <button type="submit" class="btn">Sign Up</button>
        </form>
    </div>
</div>

<!-- Alert Box -->
<?php
if ($showalert) {
    echo "<div id='alertBox' class='alert-box'>Signup successful! Now you can log in to your account.</div>";
}
?>


