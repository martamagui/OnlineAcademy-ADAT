<?php
session_start();
require 'connection.php';
$courseId = $_GET["course"];

$user = $_SESSION["email"];

$today = date("y-m-d");
$qryShoppingCart = "";

$resultCartId = $connection->query("SELECT cartID FROM ShoppingCart WHERE emailFk='" . $user . "';");
$cartId = "";
while ($row = $resultCartId->fetch_assoc()) {
    $cartId = $row["cartID"];
    echo $row["cartID"];
}
if ($resultCartId->num_rows <= 0) {
    $qryShoppingCart = "INSERT INTO ShoppingCart(cartDate, emailFk) VALUES ('" . $today . " ', '" . $user . "');";
} else {
    $qryShoppingCart = "UPDATE ShoppingCart SET cartDate='" . $today . "' WHERE emailFk='" . $user . "'";
}
$resultShoppingCartUpdate = $connection->query($qryShoppingCart);
//TODO SEGUIR CON LOS INSERTS DE LOS PRODUCTOS AL CARRITO
$resultAddProduct = $connection->query("INSERT INTO ShoppingCartDetails(cartIDfk, courseIDfk) values (" . $cartId . "," . $courseId . ")");
header('Location: ' . $_SERVER['HTTP_REFERER']);
