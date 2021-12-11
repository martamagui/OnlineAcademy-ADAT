<?php
require 'connection.php';
$cartId = $_SESSION["cartID"];
$user = $_SESSION["email"];
$result = $connection->query("DELETE FROM ShoppingCartDetails WHERE cartIDfk='" . $cartId . "';");
if ($result === TRUE) {
    echo "Borrado?" . $cartId;
} else {
    echo "no se borró";
}
mysqli_close($connection);
