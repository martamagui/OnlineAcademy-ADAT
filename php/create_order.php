<?php
require 'php/connection.php';
require 'cart/totalAmount.php';
require 'extensionFunctions/randomString.php';

$user = $_SESSION["email"];
$result = $connection->query("SELECT * FROM Courses as TablaA inner join ShoppingCartDetails as TablaB on TablaB.courseIDfk= TablaA.courseID");
$orderID = generateRandomString();
echo $orderID;
$resultInsertDate = $connection->query("INSERT INTO Orders ( orderID, orderDate, emailFk, totalPrice) VALUES ('" . $orderID . "','" . date("y-m-d") . "','" . $user . "'," . $totalPrice . ")");

mysqli_close($connection);
