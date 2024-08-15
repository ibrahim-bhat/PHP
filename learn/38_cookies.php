<?php

    echo "Cookies...";

    /*
    In PHP, cookies are small text files that servers place on a user's computer to track and identify users. Cookies are sent along with each page request from a browser on the same machine. They can store small amounts of data, such as a user's name, age, or preferences, and can be used to maintain user state within web applications. For example, cookies can be used to keep track of a user's login status. 

    */

// Cookies | Sessions

// Syntax to set a cookie
// echo time();

//setcookie ( name , value ,expiration time , path = "");

setcookie("category", "Books", time() + 86400, "/"); 
echo "The cookie is set<br>";



?>