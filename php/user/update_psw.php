<?php
require '../connection.php';
if (session_id() == '') {
    session_start();
}

$password = $_POST["password"];
$password2 = $_POST["psw-repeat"];
if (isset($_SESSION["email"])) {
    if ($password == $password2 && strlen($password) > 3) {
        $sqlUpdate = "UPDATE Users SET clientPass = '" . $password . "' WHERE email ='" . $_SESSION["email"] . "';";
        if (mysqli_query($connection, $sqlUpdate)  == true) {
            echo "Nombre cambiado";
        }
    }
}
mysqli_close($connection);
header('Location: ' . $_SERVER['HTTP_REFERER']);
