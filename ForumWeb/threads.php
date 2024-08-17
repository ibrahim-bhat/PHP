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
    $sql2 = " SELECT * FROM `thread` WHERE thread_id=$id";
    $result = mysqli_query($conn, $sql2);
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_time = $row['timestamp'];
    }
    ?>

    <!-- Main Content -->
    <div class="container">
        <h1><?php echo $title; ?> </h1>
        <p><?php echo $desc; ?></p>
        <p class="media-date">Posted on: <?php echo $thread_time; ?></p>
        <br>
        <b><i>Posted By: ibrahim</i></b>
    </div>

    <!-- comment box -->
    <div class="container">
        <?php
        $getAlert = false;
        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
            $content = $_POST['content'];
            $sql = "INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_time`) VALUES ( '$content', '$id', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            $getAlert = true;
            if ($getAlert) {
                echo "<h3>Your  comment has been successfully submited.</h3>";
            }
        }
        ?>
        <?php

        if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
            $logined = true;
        } else {
            $logined = false;
        }

        if ($logined) {
            echo '        <h2>Post a Comment</h2>
        <form action="' . $_SERVER['REQUEST_URI'] . '" method="POST">
            <!-- request uri do same work as .php?catid=' . $id . '" -->
            <label for="content">Type you comment</label>
            <textarea id="content" name="content" rows="5" required></textarea>

            <button type="submit" class="btn">Post</button>
        </form>
    </div>';
        } else {
            echo "<h2 style='color: red;'>Please login to comment on this question </h2>";
        }

        ?>


        <!-- comments -->
        <h2>Comments</h2>
        <div class="row">
            <?php
            $id = $_GET['catid'];
            $sql = " SELECT * FROM `comments` WHERE thread_id=$id";
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while ($row = mysqli_fetch_assoc($result)) {
                $noResult = false;
                $id = $row['comment_id'];
                $content = $row['comment_content'];
                // $desc = $row['thread_desc'];
                $comment_time = $row['comment_time'];
                echo ' <div class="media">
                <img src="./img/userimg.png" alt="User Avatar" class="media-avatar">
                <div class="media-body">
                    <p class="media-content">
                        ' . $content . '
                    </p>
                    <p class="media-date">Posted on: ' . $comment_time . '</p>
                </div>
            </div>';
            }
            ?>
            <?php
            if ($noResult) {
                echo '  <div class="container">
        <h2>No results found</h2>
        <p>Be the first to Comment on this question</p> 
    </div>';
            }
            ?>
        </div>

        <?php include 'partials/footer.php'; ?>

        <script src="./js/script.js"></script>
</body>

</html>