<?php
include_once 'header2.php'
?>
<?php
require 'connection.php';
$category = $_GET["value"];
$sql = "";
if ($category == "All") {
    $sql = "SELECT * FROM Courses";
} else {
    $sql = "SELECT * FROM Courses where category = '$category'";
}
$result = mysqli_query($connection, $sql) or die("Ups there was a conecction problem :S");

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Title: " . $row["title"] . " - Teacher: " . $row["teacher"] . " - " . $row["category"] . "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($connection);

?>
<?php
include_once 'footer2.php'
?>