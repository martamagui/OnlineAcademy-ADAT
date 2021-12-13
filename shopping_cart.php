<?php
include_once 'header.php'
?>
<div class="order__container">
<h1>Carrito</h1>
<?php
include_once 'php/cart/displayProducts.php';
?>
<div class="price__container">
<?php
include_once 'php/cart/totalAmount.php';
echo  "<span class='final--price'>" . number_format((float)$totalPrice, 2, '.', '') . " €</span>";
include_once 'php/cart/btnFinishOrder.php';
?>
</div>
</div>
<?php
include_once 'footer.php';
?>