<?php

    session_start();
    if(isset($_SESSION['username'])){
        echo  "Welcome" . $_SESSION['username'];
        echo  "<br>email" . $_SESSION['email'];
        echo "<br>";
        }
    else{
        echo "You are not loggod in ";
    }
?>