<?php
require 'php/connection.php';
require 'cart/totalAmount.php';
$user = $_SESSION["email"];
$result = $connection->query("SELECT * FROM Courses as TablaA inner join ShoppingCartDetails as TablaB on TablaB.courseIDfk= TablaA.courseID");
echo "<ul>";
if ($result !== false && $result->num_rows > 0) {
    // output data of each row
    $resultInsertDate = $connection->query("INSERT INTO Orders (orderDate, emailFk, totalPrice) VALUES ('".date("y-m-d")."','".$user."',".$totalPrice.")");
} else {
    unset($_SESSION["canOrder"]);
    echo "<p>No hay productos añadidos aún</p>";
}
mysqli_close($connection);




?>