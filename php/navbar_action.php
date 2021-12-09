<?php
session_start();
if (isset($_SESSION["userName"])) {
    echo "<span class='nav__item'>¡Hola  " . $_SESSION["userName"] . "!</span>";
    echo "<li class='nav__item' id='nav-experience'><a href='php/logout_action.php' id='login'><button class='button-dark basic__button'>Salir</button></a></li>";
} else {
    echo "<li class='nav__item' id='nav-experience'> <a href='login_form.php' id='login'><button class='button-dark basic__button'>Entrar</button></a></li>";
    echo "<li class='nav__item' id='nav-experience'><a href='signup_form.php' id='login'><button class='button-light basic__button'>Crear cuenta</button></a></li>";
}
