<!-- Transactions are a crucial mechanism in database management that allow you to group multiple database operations together and treat them as a single unit. If any operation within a transaction fails, the entire transaction can be rolled back, ensuring data consistency and integrity. -->

<?php
try {
    $pdo->beginTransaction();

    // Perform multiple database operations
    $pdo->exec("INSERT INTO users (name) VALUES ('Alice')");
    $pdo->exec("INSERT INTO orders (user_id) VALUES (1)");

    $pdo->commit();
    echo "Transaction committed successfully";
} catch (PDOException $e) {
    $pdo->rollBack();
    echo "Transaction rolled back: " . $e->getMessage();
}

/* beginTransaction(): This method starts a transaction.
Database Operations: Perform multiple database operations within the transaction.
commit(): If all operations are successful, commit the transaction, making the changes permanent.
rollBack(): If an exception occurs, roll back the transaction, undoing all changes made within it. */


//Another example 
try {
    $pdo->beginTransaction();

    // Perform database operations
    $pdo->exec("INSERT INTO users (name) VALUES ('Alice')");
    $pdo->exec("INSERT INTO orders (user_id) VALUES (1)");

    // ... other operations

    $pdo->commit();
    echo "Transaction committed successfully";
} catch (PDOException $e) {
    $pdo->rollBack();
    echo "Transaction rolled back: " . $e->getMessage();
    // Log the error or handle it appropriately
}
?>