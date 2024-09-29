<?php
// DB with PDO
try {
    $dsn = 'mysql:host=localhost;dbname=ajaxtable';
    $username = 'root';
    $password = '';

    $pdo = new PDO($dsn, $username, $password);

    if (!$pdo) {
        throw new Exception("Failed to connect to the database.");
    }
    echo "Database connected";
} catch (PDOException $e) {
    echo "Database error ";
    echo $e->getMessage();
}
?>