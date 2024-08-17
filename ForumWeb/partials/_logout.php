<?php
if (session_status() === PHP_SESSION_NONE) {  //session_status(): This function checks the current session status. PHP_SESSION_NONE means no session is currently active, so session_start() will be called only if needed.
    session_start();
}
echo "<h2>Logging you out. Please wait...</h2>";

session_destroy();
header("Location: /php/php/ForumWeb/index.php ");
exit();
?>