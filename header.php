<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>OnlineCraftAcademy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav>
        <!--NavBar-->
        <div class="nav">
            <div id="navName">
                <a href="index.php"><span id="nav-name">OnlineCraftAcademy</span></a>
            </div>
            <ul class="nav__list" id="nav-list">
                <li class="nav__item " id="nav-category">
                    <a href="courses_list.php?value=All">Cursos</a>
                    <div class="nav__item collapse-submenu">
                        <p class="collapse__tiltle">Categorías</p>
                        <ul>
                            <li class="collapse__item d-occult"><a href="php/showCategory.php?value=Ilustracion">Ilustración</a></li>
                            <li class="collapse__item d-occult"><a href="php/showCategory.php?value=PuntoYBordado">Punto y Bordado</a></li>
                            <li class="collapse__item d-occult"><a href="php/showCategory.php?value=Reciclaje">Reciclaje</a></li>
                        </ul>
                    </div>
                </li>
                <?php
                include_once 'php/navbar_action.php'
                ?>
                <li class="nav__item " id="nav-shopping-cart">
                    <a href="shopping_cart.php" id="shopping-cart">
                        <svg width="25" height="25" viewBox="0 0 20 20" fill="#ffff" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.1477 3.25H4.33514L3.15497 1.1346C3.0225 0.897154 2.7719 0.75 2.5 0.75H1C0.585786 0.75 0.25 1.08579 0.25 1.5C0.25 1.91421 0.585786 2.25 1 2.25H2.0596L3.22429 4.33765L5.91037 10.2809L5.91312 10.2869L6.14971 10.8104L3.45287 13.687C3.25895 13.8939 3.19825 14.1924 3.29599 14.4585C3.39372 14.7247 3.63317 14.913 3.91486 14.9452L6.37299 15.2261C9.44767 15.5775 12.5524 15.5775 15.627 15.2261L18.0852 14.9452C18.4967 14.8981 18.7922 14.5264 18.7452 14.1148C18.6981 13.7033 18.3264 13.4078 17.9149 13.4549L15.4567 13.7358C12.4952 14.0742 9.50481 14.0742 6.54331 13.7358L5.56779 13.6243L7.54717 11.513C7.56632 11.4925 7.5841 11.4713 7.60052 11.4494L8.35334 11.5474C9.40826 11.6847 10.4746 11.7116 11.5351 11.6277C14.0086 11.4321 16.301 10.2551 17.9015 8.35907L18.4795 7.67425C18.499 7.65125 18.517 7.62711 18.5335 7.60194L19.6109 5.96009C20.3745 4.79633 19.5397 3.25 18.1477 3.25Z" />
                            <path d="M5.5 16.5C4.67157 16.5 4 17.1716 4 18C4 18.8284 4.67157 19.5 5.5 19.5C6.32843 19.5 7 18.8284 7 18C7 17.1716 6.32843 16.5 5.5 16.5Z" />
                            <path d="M15 18C15 17.1716 15.6716 16.5 16.5 16.5C17.3284 16.5 18 17.1716 18 18C18 18.8284 17.3284 19.5 16.5 19.5C15.6716 19.5 15 18.8284 15 18Z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main>