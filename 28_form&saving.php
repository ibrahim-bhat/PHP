<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .container {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .form-container h2 {
            margin-top: 0;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-container button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact Us</a>
    </div>

    <div class="container">
        <!-- Contact Us Form -->
        <div id="contact" class="form-container">
            <h2>Contact Us</h2>
            <form action="28_form&saving.php" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email..">

                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write your message.." style="height:200px"></textarea>

                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>

    <!-- PHP -->

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Connecting to the Database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "dbibrahim02";

        // Create a connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        if(!$conn){
            die (' <strong>Failed!</strong> to connect! ' . mysqli_connect_error());
        }else {
            //data
            $data = "INSERT INTO `contact` ( `name`, `email`, `message`, `date`) VALUES ( '$name' , '$email' , '$message', current_timestamp())";
            $result = mysqli_query($conn, $data);
        }


        if (!$result) {
            die("Error: the record was not submitted" . mysqli_error($conn));
        } else {
            echo '<strong>Success!</strong> Your form has been submitted successfully!';
        }
    }

    ?>


</body>

</html>