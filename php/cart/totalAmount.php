<?php
require 'php/connection.php';
$user = $_SESSION["email"];
$result = $connection->query("SELECT * FROM Courses as TablaA inner join ShoppingCartDetails as TablaB on TablaB.courseIDfk= TablaA.courseID");
$totalPrice = 0;
if ($result !== false && $result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $totalPrice = $totalPrice + (float)$row["price"];
    }
    echo  "<p>" . number_format((float)$totalPrice, 2, '.', '') . " €</p>";
}
if ($totalPrice > 0) {
    $_SESSION["canOrder"] = true;
}
mysqli_close($connection);
