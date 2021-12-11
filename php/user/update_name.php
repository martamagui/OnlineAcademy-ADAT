<?php
session_start();
require '../connection.php';
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
if (isset($_SESSION["email"])) {
    if (strlen($firstName) > 1) {
        $sqlUpdate = "UPDATE Users SET firstName = '" . $firstName . "' WHERE email ='" . $_SESSION["email"] . "';";
        if (mysqli_query($connection, $sqlUpdate)  == true) {
            echo "Nombre cambiado";
        }
    }
    if (strlen($lastName) > 1) {
        $sqlUpdate = "UPDATE Users SET lastName = '" . $lastName . "' WHERE email ='" . $_SESSION["email"] . "';";
        if (mysqli_query($connection, $sqlUpdate)  == true) {
            echo "Apellidos cambiado";
        }
    }
}
mysqli_close($connection);
header('Location: ' . $_SERVER['HTTP_REFERER']);
