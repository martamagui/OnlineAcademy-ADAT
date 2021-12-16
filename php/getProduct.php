<?php
session_start();
require 'connection.php';
require 'extensionFunctions/randomString.php';

$courseId = $_GET["course"];
$user = "";
if (isset($_SESSION["email"])) {
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
        $cartId = generateRandomString();
        $qryShoppingCart = "INSERT INTO ShoppingCart(cartId,cartDate, emailFk) VALUES ('" . $cartId . "','" . $today . " ', '" . $user . "');";
    } else {
        $qryShoppingCart = "UPDATE ShoppingCart SET cartDate='" . $today . "' WHERE emailFk='" . $user . "'";
    }
    $resultShoppingCartUpdate = $connection->query($qryShoppingCart);
    $_SESSION["cartID"] = $cartId;
    echo $_SESSION["cartID"];

    $resultAddProduct = $connection->query("INSERT INTO ShoppingCartDetails(cartIDfk, courseIDfk) values (" . $cartId . "," . $courseId . ")");
    mysqli_close($connection);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "<h1>Es necesario que inicies sesión</h1>";
}
