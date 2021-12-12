<?php
include_once 'header.php';
?>
<h1>Detalles del pedido</h1>
<?php
if (!isset($_SESSION["email"])) {
    header('location: ../index.php');
}
include_once 'php/user/display_order_details.php';
?>
<div class="order__information__container">
    <div class="order__information__header">
        <h2>Pedido: OrderID</h2>
        <h3>Realizado el: orderDate</h3>
    </div>
    <div class="order__list__container">
        <ul class="order__list">
            <li class="order__list__item">
                <a href=''><img src='img/" . $row["imgName"] . "' /></a>
                <span>" . $row["title"] . "</span>
                <span>. number_format((float)$row["price"], 2, '.', '') . €</span>
            </li>
        </ul>
    </div>
</div>

<?php
include_once 'footer.php'
?>