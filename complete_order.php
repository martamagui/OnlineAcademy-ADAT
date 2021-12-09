<?php
include_once 'header.php'
?>
<div class="order__container">
    <?php
    include_once 'php/order_step1.php'
    ?>
    <div class="order__cart">
        <h1>Carrito</h1>
        <?php
        include_once 'php/cart/displayProducts.php';
        include_once 'php/cart/totalAmount.php';
        ?>
    </div>
</div>

<?php
include_once 'footer.php'
?>