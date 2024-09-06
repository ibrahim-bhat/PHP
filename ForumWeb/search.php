<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/navbar.php'; ?>

    <!-- alter table threads add FULLTEXT(`thread_title`, `thread_desc`); -->

    <h1>Search results for <?php echo $_GET['search'] ?></h1>

    <?php
    $noResult = true;
    $query = $_GET["search"];
    $sql = "SELECT * FROM thread WHERE MATCH(thread_title, thread_desc) AGAINST ('$query')";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $noResult = false;
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_id = $row['thread_id'];
        $url = "threads.php?catid=" . $thread_id;

        echo '<div class="result">
                        <h3><a href="' . $url . '" class="text-dark">' . $title . '</a> </h3>
                        <p>' . $desc . '</p>
                  </div>';
    }
    if ($noResult) {
        echo ' <div class="container">
                        <p>No Results Found</p>
                        <p > Suggestions: <ul>
                                <li>Make sure that all words are spelled correctly.</li>
                                <li>Try different keywords.</li>
                                <li>Try more general keywords. </li></ul>
                        </p>
                 </div>';
    }
    ?>


    <?php include 'partials/footer.php'; ?>

    <script src="./js/script.js"></script>
</body>

</html>