<?php
// connectamos el archivo con la sessión del navegador
session_start();
//cargamos la conexión
require 'connection.php';


$email = $_POST["email"];
$clientPass = $_POST["password"];
$sql = "SELECT * FROM  Users where email = '$email' and clientPass='$clientPass'";



$result = mysqli_query($connection, $sql) or die("Ups there was a conecction problem :S");

if ($reg = mysqli_fetch_array($result)) {
    //si existe un registro creamos una variable para controlar a usuario
    $_SESSION["email"] = $reg["email"];
    // redirigimos al usuario a la pagina principal.
    header('location: ../index.php');
}

mysqli_close($connection);
