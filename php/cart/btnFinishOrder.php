<?php
if (isset($_SESSION["canOrder"])) {
  echo "
  <form action='complete_order.php' method='post'>
    <input type='submit' value='Tramitar pedido' class='basic__button button-dark''/>
  </form>";
}
