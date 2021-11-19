<?php
include_once 'header.php'
?>
<h1>Carrito</h1>
<ul>
    <li>
        <div class="cart_product">
            <a href=""><img id="producto1"src=" " /></a>
            <div></div>
        </div>
    </li>
    <?php
    session_start();
    require 'php/connection.php';
    $user = $_SESSION["email"];
    $registros = $connection ->query("SELECT * FROM ")

    ?>
</ul>
<?php
include_once 'footer.php'
?>