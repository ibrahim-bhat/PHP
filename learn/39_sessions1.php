<?php
// What is a session?

//    // sessions are a way to temporarily store and access data across multiple pages of a website. Sessions create a temporary file that stores session variables and their values, which are then destroyed when the user closes the browser.  Sessions are different from cookies because session variables are not stored on the user's computer. Instead, they hold information about a single user and are available to all pages in an application. This allows developers to build more customized applications and improve the appeal of their websites by storing and accessing information like user authentication status or preferences throughout a user's interaction with the site. 
// Used to manage information across difference pages

// Verify the user login info
session_start();
$_SESSION['username'] = "ibrahim";
$_SESSION['email'] = "dev.ibrahim.in@gmail.com";
echo "we have started  you sessions";
?>