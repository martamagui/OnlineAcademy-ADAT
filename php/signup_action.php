<?php
//cargamos la conexión
require 'connection.php';

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];

$email = $_POST["email"];
$clientPass = $_POST["password"];
$clientPass2 = $_POST["psw-repeat"];
checkUser($connection, $clientPass, $clientPass2, $email, $firstName, $lastName);
function checkUser($connection, $clientPass, $clientPass2, $email, $firstName, $lastName)
{
    $SQLUserExist = "SELECT email FROM Users WHERE email='" . $email . "';";
    $result = mysqli_query($connection, $SQLUserExist) or die("Ups there was a conecction problem :S");
    if (mysqli_num_rows($result) == 0) {
        createNewUser($connection, $clientPass, $clientPass2, $email, $firstName, $lastName);
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
function createNewUser($connection, $clientPass, $clientPass2, $email, $firstName, $lastName)
{
    if ($clientPass == $clientPass2) {
        $sql = "INSERT INTO Users (email, firstName, lastName, clientPass) VALUES ('$email', '$firstName', '$lastName', '$clientPass')";
        if (mysqli_query($connection, $sql)  == true) {

            header('location: ../index.php');
        } else {
            echo "Registro no completado";
        }
        mysqli_close($connection);
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
