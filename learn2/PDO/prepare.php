<?php
    include "./testdb.php";


    // get data form database using prepare mehtod
    $name = 'khushboo';
    $id = 1;
    $sql = $pdo->prepare("SELECT * FROM `table` WHERE name = :name AND id > :id ");
    // $sql->bindParam(':name', $name , PDO::PARAM_STR);
    // $sql->bindParam(':id', $id , PDO::PARAM_INT);
    $sql->execute(array(':name' => $name , ':id'=> $id));

// $sql->bindParam('1', $name , PDO::PARAM_STR);
// $sql->bindParam('2', $id , PDO::PARAM_INT);
// $sql->execute(array($city , $id));


while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    echo "{$row["id"]} - {$row["name"]}<br>";
}


// inserting data into databse using preapre method
$name = "";
$sql = $pdo->prepare("INSERT INTO `table`(name) VALUES (:name)");
$sql->execute(array(':name' => $name));


// update 
$sq = "UPDATE `table` SET name ='ibrah' WHERE name = 'ibrahim'";
$result=exec ($sq);
echo $result;


?>