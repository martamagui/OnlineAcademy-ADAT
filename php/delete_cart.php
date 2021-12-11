<?php
require 'connection.php';
$cartId = $_SESSION["cartID"];
$user = $_SESSION["email"];
$result = $connection->query("DELETE FROM ShoppingCartDetails WHERE cartIDfk='" . $cartId . "';");
mysqli_close($connection);
