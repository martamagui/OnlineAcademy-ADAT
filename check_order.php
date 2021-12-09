<?php
include_once 'header.php'
?>
<div class="order__container">
  <?php
  include_once 'php/order_step1.php'
  ?>
  <div class="order__cart">
    <h1>Carrito</h1>
    <h2>¿Está todo bien?</h2>
    <?php
    include_once 'php/cart/displayProducts.php';
    include_once 'php/cart/totalAmount.php';
    ?>
    <form action='pay_order.php' method='post'>
      <input type='submit' value='Pagar' class='basic__button button-dark''/>
    </form>
    <?php
    if (!isset($_SESSION["canOrder"])) {
      header('location: ../index.php');
    }
    ?>
  </div>
</div>

<?php
include_once 'footer.php'
?>