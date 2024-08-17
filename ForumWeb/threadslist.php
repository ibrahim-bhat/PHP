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

    <?php
    $id = $_GET['catid'];
    $sql = " SELECT * FROM `category` WHERE category_id=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }
    ?>

    <!-- Main Content -->
    <div class="container">
        <h1>Welcome to <?php echo $catname; ?> Formus</h1>
        <p><?php echo substr($catdesc, 0, 500) ?></p>
        <a href="forum.html" class="btn">Learn more</a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <!-- form for postign questions -->

            <?php
            $showalert = false;
            if (($_SERVER["REQUEST_METHOD"] == "POST")) {
                $question = $_POST['title'];
                $description = $_POST['content'];
                $id = $_GET['catid'];
                $sql = "INSERT INTO `thread` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$question', '$description', '$id', '0', current_timestamp());";
                $result = mysqli_query($conn, $sql);
                $showalert = true;
                if ($showalert) {
                    echo "<h3 style='color: green;'>Your  thread has been successfully submited.</h3>";
                }
            }

            ?>

            <!-- if user is logged in then he can start discussion -->

            <!-- request uri do same work as .php?catid=' . $id . '" -->
            <?php

            if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                $logined = true;
            } else {
                $logined = false;
            }

            if ($logined) {
                echo '           <div class="container">
                <h2>Start a discussion</h2>
                <form action="' . $_SERVER["REQUEST_URI"] . '" method="POST">
                    <label for="title">Problem Title:</label>
                    <input type="text" id="title" name="title" required>

                    <label for="content">Ellaborate your concer</label>
                    <textarea id="content" name="content" rows="5" required></textarea>

                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>';
            } else {
                echo "<h2 style='color: red;'>Please login to Post your question </h2>";
            }
            ?>


            <br><br><br>
            <h2>Browse Questions?</h2>
            <br><br>


            <?php
            $id = $_GET['catid'];
            $sql = " SELECT * FROM `thread` WHERE thread_cat_id=$id";
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while ($row = mysqli_fetch_assoc($result)) {
                $noResult = false;
                $id = $row['thread_id'];
                $title = $row['thread_title'];
                $desc = $row['thread_desc'];
                $thread_time = $row['timestamp'];
                $thread_user_id = $row['thread_user_id'];
                $sql2= "SELECT user_email FROM `user-account` WHERE sno='$thread_user_id'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $posted_by = $row2['user_email'];
                echo ' <div class="media">
                <img src="./img/userimg.png" alt="User Avatar" class="media-avatar">
                <div class="media-body">
                    <h4 class="media-heading"><a href="threads.php?catid=' . $id . '">' . $title . '</a></h4>
                    <p class="media-content">
                        ' . $desc . '
                    </p>
                    <p class="media-date">Posted on: ' . $thread_time . '</p>
                    <p class="media-date">By: ' . $posted_by . '</p>
                </div>
            </div>';
            }
            if ($noResult) {
                echo '  <div class="container">
        <h2>No results found</h2>
        <p>Be the first to post a question</p> 
    </div>';
            }
            ?>

        </div>
    </div>


    <?php include 'partials/footer.php'; ?>

    <script src="./js/script.js"></script>
</body>

</html>