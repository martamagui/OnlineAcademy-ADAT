<?php
require 'connection.php';
$email = $_POST["email"];
$clientPass = $_POST["password"];
$sql = "SELECT * FROM  Users where email = '$category'";



$result = mysqli_query($connection, $sql) or die("Ups there was a conecction problem :S");

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Title: " . $row["email"] . $row["clientPass"] . "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($connection);
