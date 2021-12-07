<?php
include_once 'header.php'
?>
<h1>Carrito</h1>

<?php
// session_start();
require 'php/connection.php';
$user = $_SESSION["email"];
$result = $connection->query("SELECT * FROM Courses as TablaA inner join ShoppingCartDetails as TablaB on TablaB.courseIDfk= TablaA.courseID");
$totalPrice = 0;
echo "<ul>";
if ($result !== false && $result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<li><form class='cart__product' action='php/deleteProduct.php?course=" . $row["courseID"] . "&cartId=" . $row["cartIDfk"] . "'  method='post'>";
        echo "<a href=''><img src='img/" . $row["imgName"] . "' /></a>";
        echo "<h4> " . $row["title"] . "</h4> <span> " . $row["teacher"] . "</span> - " . number_format((float)$row["price"], 2, '.', '') . " €<br>";
        echo "<input type='submit' value='Eliminar' class='basic__button button-dark''/>";
        echo "</form></li>";
        $totalPrice = $totalPrice + (float)$row["price"];
    }
} else {
    echo "<p>No hay productos añadidos aún</p>";
}
echo "</ul>";
echo  "<p>" . number_format((float)$totalPrice, 2, '.', '') . " €</p>";
echo "<form action='php/complete_order.php method='post'>
    <input type='submit' value='Tramitar pedido' class='basic__button button-dark''/>
    </form>";
mysqli_close($connection);
?>


<?php
include_once 'footer.php'
?>