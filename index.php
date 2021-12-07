<?php
include_once 'header.php'
?>
<div class="banner" id="banner">
    <div class="banner__column">
        <img src="img/banner.jpg" alt="Artwork Paula Bonnnet">
    </div>
    <div class="banner__column">
        <h2 class="banner__title banner__item">Libera tu creatividad con OnlineCraftAcademy.</h2>
        <span class="banner__item"> Aprende de los mejores artistas de cada área.</span>
        <div class="banner__button__container banner__item">
            <a href="courses_list.php?value=All"><button class="banner__button button-dark">Ver cursos</button></a>
            <button class="banner__button button-light">Crea tu cuenta</button>
        </div>
    </div>

</div>
<div class="landing__main__container">
    <h2>Aprende practicando</h2>
    <p>Accede a los mejores cursos online para creativos. Interactúa con los mejores profesionales y descubre todos los secretos del sector.</p>
</div>
<?php
include_once 'php/load_6_products.php'
?>
<?php
include_once 'footer.php'
?>