<?php

// databse connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ajaxtable"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

//feteching data form database

$sql = "SELECT * FROM `table`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data
    while ($row = $result->fetch_assoc()) {
        echo "            <tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
            </tr>";
    }
} else {
    echo "<br>0 results";
}
