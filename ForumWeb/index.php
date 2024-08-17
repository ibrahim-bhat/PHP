<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForumWeb - Home</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <?php include 'partials/navbar.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>

    <!-- Main Content -->
    <div class="container">
        <h1>Welcome to ForumWeb</h1>
        <p>Join discussions, share your thoughts, and connect with others.</p>
        <a href="forum.html" class="btn">Enter Forum</a>
    </div>

    <h2>
        ForumWeb - Browse Categories
    </h2>

    <!-- Content Categories -->
    <div class="row">
        <?php
        $sql = "SELECT * FROM `category`";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['category_id'];
            $cat = $row['category_name'];
            $desc = $row['category_description'];
            $created = $row['created'];
            echo '        <div class="info-box">
            <img src="path_to_your_image.jpg" alt="Image description">
            <h2><a href="threads.php?catid=' . $id . '"></a>' . $cat . '</h2>
            <p>'. substr($desc , 0 ,200 )  . '...</p>
            <p> Posted on (' . $created . ')</p>
            <a href="threadslist.php?catid='. $id . '" class="btn">Read More</a>
        </div>';
        }
        ?>
    </div>



    <?php include 'partials/footer.php'; ?>

    <script src="./js/script.js"></script>
</body>

</html>