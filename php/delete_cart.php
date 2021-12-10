<?php
require 'connection.php';
$cartId = $_SESSION["cartId"];
$user = $_SESSION["email"];
$result = $connection->query("DELETE FROM ShoppingCart WHERE cartID='" . $cartId . "';");
echo "Borrado?".$cartId;
//header('location: ../index.php');
if ($result === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $connection->error;
  }
  mysqli_close($connection);
?>
