<?php
require 'php/connection.php';
require 'cart/totalAmount.php';
require 'extensionFunctions/randomString.php';

$user = $_SESSION["email"];
$result = $connection->query("SELECT * FROM Courses as TablaA inner join ShoppingCartDetails as TablaB on TablaB.courseIDfk= TablaA.courseID");
$orderID = generateRandomString();
$resultInsertDate = $connection->query("INSERT INTO Orders ( orderID, orderDate, emailFk, totalPrice) VALUES ('" . $orderID . "','" . date("y-m-d") . "','" . $user . "'," . $totalPrice . ")");
$resultPickUpProducts = $connection->query("SELECT * FROM ShoppingCartDetails WHERE cartIDfk ='" . $_SESSION["cartID"] . "'");
if ($result !== false && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $resultInsertOrderDetail =  $connection->query("INSERT INTO OrderDetails(courseIDfk , orderIDfk) VALUES (" . $row["courseIDfk"] . ",'" . $orderID . "')");
        $resultInsertUserOrder =  $connection->query("INSERT INTO UserCourses(courseIDfk , emailFk) VALUES (" . $row["courseIDfk"] . ",'" . $user . "')");
    }
}

mysqli_close($connection);
