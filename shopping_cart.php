<?php
include_once 'header.php'
?>
<h1>Carrito</h1>
<?php
include_once 'php/cart/displayProducts.php';
include_once 'php/cart/totalAmount.php';
echo  "<p>" . number_format((float)$totalPrice, 2, '.', '') . " €</p>";
include_once 'php/cart/btnFinishOrder.php';
include_once 'footer.php';
?>