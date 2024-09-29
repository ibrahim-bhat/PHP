<!-- PDO refers to PHP Data Object, which is a PHP extension that defines a lightweight and consistent interface for accessing a database in PHP. It is a set of PHP extensions which provide a core PDO class and database-specific driver. Each database driver can expose database-specific features as a regular extension function that implements the PDO interface. 
 PDO - It represents a connection between PHP and the database.
PDOStatement - It represents the prepared statement and after the execution of the statement, sets an associated result.
PDOException - It represents errors raised by PDO.-->

<?php
error_reporting();

include "./testdb.php";

$sql = "SELECT * FROM `table`";
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){  //FETCH_NUM  , _BOTH , _OBJ
    echo "{$row["id"]} - {$row["name"]}<br>";
}



// as num

// while ($row1 = $sql->fetch(PDO::FETCH_NUM)) {
//     echo "{$row1[0]} - {$row1[1]} - {$row1[2]} - {$row1[3]} <br>";
// }


//as obj

// while ($row2 = $sql->fetch(PDO::FETCH_OBJ)
// ) {
//     echo "{$row2->id} - {$row2->student_name} - {$row2->city} - {$row2->dob} <br>";
// }


   
?>