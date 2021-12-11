<?php
function total()
{
    require 'php/connection.php';
    $totalPrice = 0;
    if (isset($_SESSION["email"]) && isset($_SESSION["cartID"])) {
        $user = $_SESSION["email"];
        $result = $connection->query("SELECT * FROM ShoppingCart, ShoppingCartDetails, Courses WHERE ShoppingCart.cartID = ShoppingCartDetails.cartIDfk AND ShoppingCartDetails.courseIDfk =  Courses.courseID AND ShoppingCart.cartID ='" . $_SESSION["cartID"] . "';");
        if ($result !== false && $result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $totalPrice = $totalPrice + (float)$row["price"];
            }
        }
        mysqli_close($connection);
    }
    return $totalPrice;
}
$totalPrice = total();

if ($totalPrice > 0) {
    $_SESSION["canOrder"] = true;
}
