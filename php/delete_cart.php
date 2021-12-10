<?php
require 'connection.php';
$cartId = $_SESSION["cartId"];
$user = $_SESSION["email"];
echo "Borrado?".$cartId;
$result = $connection->query("DELETE FROM ShoppingCartDetails WHERE cartIDfk='" . $cartId . "';");
//header('location: ../index.php');
/*if ($result === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $connection->error;
  }*/
  mysqli_close($connection);
?>
