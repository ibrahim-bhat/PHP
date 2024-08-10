<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbibrahim02";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo " $num records found in the DataBase<br><br><br>";

//fetch the record
// $record = mysqli_fetch_assoc($result);
// echo var_dump($record);
// echo "<br>";
//echo var_dump(mysqli_fetch_assoc($result));

// for($i=0; $i<=$num; $i++){
//   $record = mysqli_fetch_assoc($result);
//   echo $record['sno'] . " Hello  " . $record['name']. "  your Email is  " .$record['email'] . "  &you send a message to us:-  " . $record['message'] . "   / on this date and time :- " . $record['date'];
//   echo "<br><br>";
// }


// using while loop
$sno = 1 ;
// while($record =mysqli_fetch_assoc($result)){
// echo $sno . ")  " . " Hello  " . $record['name'] . "<br>  Your Email is  " . $record['email'] . "<br>  Message to us was:-  " . $record['message'] . "<br>   Date and Time was :- " . $record['date'];
//   echo "<br><br><br>";
//   $sno++;
// }

//$record['sno']


while ($record = mysqli_fetch_assoc($result)) { //here we are assigning recordsof db to $record 
  echo $sno . ")  " . $record['name'] . "<br> " . $record['email'] . "<br> " . $record['message'] . "<br>" . $record['date'];
  echo "<br><br><br>";
  $sno++;
}




//using for each loop

// Fetch all records into an array
// $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// // Iterate over the array using a foreach loop
// foreach ($rows as $row) {
//     // Loop through each key-value pair in the row
//     foreach ($row as $key => $value) {
//         echo "<br>$key = $value";
//     }
//     echo "<br><br>";
// }


    






//mysqli_fetch_assoc($result). It will return an array that will show the first record. Now to see the second record, we need to use mysqli_fetch_assoc($result) again. Because mysqli_fetch_assoc() returns an associative array representing the next record, we can now use this method to return the records. For that, we need to copy-paste the mysqli_fetch_assoc($result) several times until it returns a NULL value. But this is not the optimal way to do it. We can use "while-loop" and get a similar result in a short length of code. If we use this code, it will show all the values until it returns a NULL value. 



?>