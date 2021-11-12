<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>OnlineCraftAcademy</title>
</head>

<body>
    <nav>
        <!--NavBar-->
        <div class="nav">
            <div id="navName"> 
                <a href="../index.php"><span id="nav-name">OnlineCraftAcademy</span></a>
            </div>
            <ul class="nav__list" id="nav-list">
                <li class="nav__item " id="nav-category">
                    <a href="php/showCategory.php?value=All">Cursos</a>
                    <div class="nav__item collapse-submenu">
                        <p class="collapse__tiltle">Categorías</p>
                        <ul>
                            <li class="collapse__item d-occult"><a href="php/showCategory.php?value=Ilustracion">Ilustración</a></li>
                            <li class="collapse__item d-occult"><a href="php/showCategory.php?value=PuntoYBordado">Punto y Bordado</a></li>
                            <li class="collapse__item d-occult"><a href="php/showCategory.php?value=Reciclaje">Reciclaje</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav__item " id="nav-shopping-cart">
                    <a href="shopingCart.php" id="shopping-cart"><img id="nav-shopping-cart-img"src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/64/000000/external-shopping-cart-miscellaneous-kiranshastry-gradient-kiranshastry.png" /></a>
                </li>
                <li class="nav__item" id="nav-experience">
                    
                    <a href="login.php" id="login"><button class="button-dark">Entrar</button></a>
                </li>
                <li class="nav__item " id="nav-experience">
                    <a href="signup.php" id="login"><button class="button-light">Crear cuenta</button></a>
                </li>
            </ul>
        </div>
    </nav>
    <main>