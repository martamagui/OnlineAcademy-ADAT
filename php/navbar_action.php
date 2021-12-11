<?php
session_start();
if (isset($_SESSION["userName"])) {
    echo "<span class='nav__item'>¡Hola  " . $_SESSION["userName"] . "!</span>";
    $element = ' 
    <li class="nav__item " id="nav-profile">
    <a href="profile.php" id="profile-icon">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="#ffff" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 3.75C9.92893 3.75 8.25 5.42893 8.25 7.5C8.25 9.57107 9.92893 11.25 12 11.25C14.0711 11.25 15.75 9.57107 15.75 7.5C15.75 5.42893 14.0711 3.75 12 3.75Z" />
            <path d="M8 13.25C5.92893 13.25 4.25 14.9289 4.25 17V18.1883C4.25 18.9415 4.79588 19.5837 5.53927 19.7051C9.8181 20.4037 14.1819 20.4037 18.4607 19.7051C19.2041 19.5837 19.75 18.9415 19.75 18.1883V17C19.75 14.9289 18.0711 13.25 16 13.25H15.6591C15.4746 13.25 15.2913 13.2792 15.1159 13.3364L14.2504 13.6191C12.7881 14.0965 11.2119 14.0965 9.74959 13.6191L8.88407 13.3364C8.70869 13.2792 8.52536 13.25 8.34087 13.25H8Z" />
        </svg>
    </a>
</li>';
    echo $element;
    echo "<li class='nav__item' id='nav-experience'><a href='php/logout_action.php' id='login'><button class='button-dark basic__button'>Salir</button></a></li>";
} else {
    echo "<li class='nav__item' id='nav-experience'> <a href='login_form.php' id='login'><button class='button-dark basic__button'>Entrar</button></a></li>";
    echo "<li class='nav__item' id='nav-experience'><a href='signup_form.php' id='login'><button class='button-light basic__button'>Crear cuenta</button></a></li>";
}
