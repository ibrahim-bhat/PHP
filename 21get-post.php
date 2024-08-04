<?php

echo "<h1>Get & Post</h1><br>";

//What is the Get method in Php?
//The get method sends the information of the user with the page request. This information can be seen in the URL of the page. This information is separated by ? character.

//Note: $_POST is an associative array in PHP that contains all the information sent through the POST method.AND FOR GET ALSO

//What is the Post method in Php?
//The post method sends the data to the backend. The information is encoded and put into the header known as QUERY_STRING. The user cannot see this information from the URL of the page.

//Comparison of Post and Get method – Advantages/Disadvantages
//  By the GET method, only 1024 characters of information can be sent. Whereas the POST method does not have any restriction.

// As the information exchanged by using the GET method can be seen through the URL of the page. It is not recommended to use the GET method for passing sensitive data like passwords.

//In the POST method, the information goes through the HTTP header. So, the security depends on HTTP protocol.

//The POST method can send both binary and ASCII data. On the other hand, the GET method cannot be used to send binary data like documents, images, etc.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-3">
        <h1>Please enter your email and password</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" name="pass">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your email ' . $email . ' and password ' . $password . ' has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
        // Submit these to a database
    }
    ?>
</body>
<!-- In PHP, $_SERVER['REQUEST_METHOD'] is a variable that can be used to determine the method used to access a page, such as GET, POST, or PUT. The code if($_SERVER['REQUEST_METHOD'] == "POST") { //do something } checks the request method. This code can be used to perform different actions based on the request type. For example, in a web application, if the request method is POST, the PHP script can process form data and store it in a database. -->

</html>