<?php
include_once 'header.php'
?>
<h1>Carrito</h1>
<ul>
    <?php
    session_start();
    require 'php/connection.php';
    $user = $_SESSION["email"];
    $result = $connection ->query("SELECT * FROM Courses as TablaA inner join ShoppingCartDetails as TablaB on TablaB.courseIDfk= TablaA.courseID where TablaB.cartIDfk =  (SELECT cartID FROM ShoppingCart WHERE emailFk='$user');");
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo"<div class='cart_product'>";
            echo "<a href=''><img src='img/" .$row["imgName"] ."' /></a>";
            echo "Title: " . $row["title"] . " - Teacher: " . $row["teacher"] . " - " . $row["price"] . "<br>";
            echo " </div></li>";
        }
    } else {
        echo "No hay productos añadidos aún";
    }
    mysqli_close($connection);
    
    ?>
</ul>
<?php
include_once 'footer.php'
?>