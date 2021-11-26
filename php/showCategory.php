<?php
include_once 'header2.php'
?>
<div class ='products__container'>
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
        echo "<div class ='product__card'>";
        echo "<a href=''><img src='../img/" .$row["imgName"] ."' /></a>";
        echo "<div class ='product__card__info'>";
        echo "<h2>". $row["title"] ."</h2>";
        echo "<span> Curso impartido por " . $row["teacher"] . "</span> ";

        echo "<a href='php/showCategory.php?value=". $row["category"] ."'>". $row["category"] ."</a>";
        echo "<button type='button' class='basic__button button-dark'>".  number_format((float)$row["price"],2, '.','') ." €</button>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
mysqli_close($connection);

?>
</div>
<?php
include_once 'footer2.php'
?>