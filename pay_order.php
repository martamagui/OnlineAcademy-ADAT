<?php
include_once 'header.php'
?>
<div class="order__container">
    <div class="order__cart">
        <h1>Pagar</h1>
        <h2>¿Está todo bien?</h2>
        <form action="validate_payment.php" method="post">
            <div class="">
                <h3>Payment</h3>
                <label for="fname">Métodos de pago aceptados</label>
                <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                </div>
                <label for="cname">Nombre del titular</label>
                <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                <label for="ccnum">Número de tarjeta</label>
                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                <div class="pay__form__date">
                    <div class="pay__form__date__item">
                        <label for="expmonth">Fecha de expiración</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="08">
                    </div>
                    <div class="pay__form__date__item">
                        <label for="expyear">Exp Year</label>
                        <input type="text" id="expyear" name="expyear" placeholder="2018">
                    </div>
                    <div class="pay__form__date__item">
                        <label for="cvv">CVV</label>
                        <input type="text" id="cvv" name="cvv" placeholder="352">
                    </div>
                </div>
            </div>
            <input type="submit" value="Continue to checkout" class="btn">
        </form>
        <?php
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