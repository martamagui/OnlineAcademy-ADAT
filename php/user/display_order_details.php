<?php
if (isset($_GET["order"])) {
    require 'php/connection.php';


    //TODO recoger detalles pedidos






    echo "<p>Pedido recibido</p>";
} else {
    echo "<p>Pedido no encontrado.</p>";
}
