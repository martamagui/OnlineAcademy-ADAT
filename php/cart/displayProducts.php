<?php
require 'php/connection.php';

if (isset($_SESSION["email"]) && isset($_SESSION["cartID"])) {
    $user = $_SESSION["email"];
    $result = $connection->query("SELECT * FROM ShoppingCart, ShoppingCartDetails, Courses WHERE ShoppingCart.cartID = ShoppingCartDetails.cartIDfk AND ShoppingCartDetails.courseIDfk =  Courses.courseID AND ShoppingCart.cartID ='" . $_SESSION["cartID"] . "';");
    echo "<ul>";
    if ($result !== false && $result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<li><form class='cart__product ' action='php/deleteProduct.php?course=" . $row["courseID"] . "&cartId=" . $row["cartIDfk"] . "'  method='post'>";
            echo "<a href='' class='cart__product--item'><img src='img/" . $row["imgName"] . "' /></a>";
            echo "<h4  class='cart__product--item'> " . $row["title"] . "</h4> <span  class='cart__product--item product--teacher'> " . $row["teacher"] . "</span> <span  class='cart__product--item'>" . number_format((float)$row["price"], 2, '.', '') . " €</span>";
            echo "<div  class='cart__product--item'><input type='submit' value='Eliminar' class='basic__button button-dark''/></div>";
            echo "</form></li>";
        }
        echo "</ul>";
    } else {
        unset($_SESSION["canOrder"]);
        echo "<p>No hay productos añadidos aún</p>";
    }
    mysqli_close($connection);
} else {
    echo "<p>No hay productos añadidos aún</p>";
}
