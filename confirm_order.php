<?php
include_once 'header.php';
?>
<div class="banner banner__order">
    <div class="banner__column"><img src="img/tyOrder.jpg" alt="Thanks image"></div>
    <div class="banner__column">
        <h1>Gracias por tu pedido.</h1>
        </br>
        <a href="index.php">Regresar a la página principal</a>
        </br>
        <span>Recibiras por email tus cursos.</span>
    </div>
</div>

<?php
include_once 'php/create_order.php';
include_once 'php/delete_cart.php';
?>