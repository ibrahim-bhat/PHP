<!-- SQL Injection Prevention
SQL injection is a type of security attack where malicious code is injected into an SQL statement, potentially allowing an attacker to gain unauthorized access to or modify data. To prevent SQL injection, it's crucial to sanitize and validate user input before incorporating it into SQL queries. -->

<?php
/* Prepared Statements:

Use prepared statements to separate the SQL query from the data. This prevents the attacker from injecting malicious code into the query itself.
Example (using PDO): */
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$_POST['username']]);


/* Parameterized Queries:

Similar to prepared statements, parameterized queries bind parameters to the query, preventing SQL injection.
Example (using MySQLi): */
$stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $_POST['username']);  //bind_value()
$stmt->execute();


//input filter validation 
// Using prepared statements
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->execute([$_POST['username'], $_POST['password']]);
?>

<!-- bind_param("s")

This method is used in conjunction with prepared statements to bind parameters to a prepared SQL statement.
The s parameter specifies the data type of the parameter. In this case, s indicates a string.
You can use other characters to specify different data types:
i: Integer
d: Double
b: Blob
s: String
i: Integer
execute()

This method executes the prepared SQL statement with the bound parameters.
It returns true on success and false on failure.
 -->