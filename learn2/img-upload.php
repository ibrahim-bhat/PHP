<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>
    <?php
    if (isset($_FILES['image'])) {
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
    }
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_temp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    move_uploaded_file($file_temp, "uploaded-img/" , $file_name);
    ?>
    <form action="" method="$_POST" enctype="multipart/form-data">
        <input type="file" name="image" />
        <br>
        <input type="submit" />
    </form>
</body>

</html>