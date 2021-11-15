<?php
//cargamos la conexión
require 'connection.php';

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];

$email = $_POST["email"];
$clientPass = $_POST["password"];
$clientPass2 = $_POST["psw-repeat"];

if ($clientPass == $clientPass2) {
    $sql = "INSERT INTO Users (email, firstName, lastName, clientPass) VALUES ('$email', '$firstName', '$lastName', '$clientPass')";
    if (mysqli_query($connection, $sql)  == true) {

        header('location: ../index.php');
    } else {
        echo "Registro no completado";
    }
    mysqli_close($connection);
} else {
    header('location: ../signup_form.php');
}
