<?php
include_once 'header.php'
?>
<h1>Carrito</h1>
<ul>
    <?php
    session_start();
    require 'php/connection.php';
    $user = $_SESSION["email"];
    //TODO Da error es porque tengo que controlar que no se creen dos carritos de la misma persona.
    $result = $connection->query("SELECT * FROM Courses as TablaA inner join ShoppingCartDetails as TablaB on TablaB.courseIDfk= TablaA.courseID");
    if ($result !== false && $result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<li><form class='cart_product' action='php/deleteProduct.php?course=" . $row["courseID"] . "&cartId=" . $row["cartIDfk"] . "'  method='post'>";
            echo "<a href=''><img src='img/" . $row["imgName"] . "' /></a>";
            echo "Title: " . $row["title"] . " - Teacher: " . $row["teacher"] . " - " . $row["price"] . "<br>";
            echo "<input type='submit' value='Eliminar' class='basic__button button-dark''/>";
            echo "</form></li>";
        }
    } else {
        echo "<p>No hay productos añadidos aún</p>";
    }
    mysqli_close($connection);

    ?>
</ul>
<?php
include_once 'footer.php'
?>