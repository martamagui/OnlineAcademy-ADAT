<?php
function getCartId(){
    require 'php/connection.php';
    $resultCartId = $connection->query("SELECT cartID FROM ShoppingCart WHERE emailFk='" . $user . "';");
    $cartId = "";
    while ($row = $resultCartId->fetch_assoc()) {
        $cartId = $row["cartID"];
    }
    return $cartId;
    mysqli_close($connection);
}

?>