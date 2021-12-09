<?php
require 'php/connection.php';
$user = $_SESSION["email"];
$result = $connection->query("SELECT * FROM Courses as TablaA inner join ShoppingCartDetails as TablaB on TablaB.courseIDfk= TablaA.courseID");
echo "<ul>";
if ($result !== false && $result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<li><form class='cart__product' action='php/deleteProduct.php?course=" . $row["courseID"] . "&cartId=" . $row["cartIDfk"] . "'  method='post'>";
        echo "<a href=''><img src='img/" . $row["imgName"] . "' /></a>";
        echo "<h4> " . $row["title"] . "</h4> <span> " . $row["teacher"] . "</span> - " . number_format((float)$row["price"], 2, '.', '') . " €<br>";
        echo "<input type='submit' value='Eliminar' class='basic__button button-dark''/>";
        echo "</form></li>";
    }
} else {
    unset($_SESSION["canOrder"]);
    echo "<p>No hay productos añadidos aún</p>";
}
mysqli_close($connection);