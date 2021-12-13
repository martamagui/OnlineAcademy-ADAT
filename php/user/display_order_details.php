<?php
if (isset($_GET["order"]) && isset($_GET["date"])) {
    require 'php/connection.php';

    //TODO recoger detalles pedidos
    $user = $_SESSION["email"];
    $result = $connection->query(("Select * FROM OrderDetails,Courses WHERE OrderDetails.orderIDfk='" . $_GET["order"] . "' AND OrderDetails.courseIDfk = Courses.courseID ;"));

    if ($result !== false && $result->num_rows > 0) {
        $elementHeader = '
        <div class=" order__container">
            <div class="order__information__header">
                <h2>Pedido: ' . $_GET["order"] . '</h2>
                <h3>Realizado el: ' . $_GET["date"] . '</h3>
            </div>';
        echo  $elementHeader;
        while ($row = $result->fetch_assoc()) {
            $orderComponent = '    
                    <ul >
                        <li class="cart__product">
                            <a class="cart__product--item" href=""><img src="img/' . $row["imgName"] . '" /></a>
                            <span class="cart__product--item">' . $row["title"] . '</span>
                            <span class="cart__product--item">' . number_format((float)$row["price"], 2, '.', '') . ' €</span>
                        </li>
                    </ul> ';
            echo $orderComponent;
        }
       
    }
    $resultTotal = $connection->query(("Select * FROM Orders WHERE orderID='" . $_GET["order"] . "';"));
    if ($resultTotal !== false && $resultTotal->num_rows > 0) {
        while ($row = $resultTotal->fetch_assoc()) {
            echo '<span class="price">Total: ' . number_format((float)$row["totalPrice"], 2, '.', '') . ' €</span>';
        }
    }
    echo "</div>";
    mysqli_close($connection);
} else {
    echo "<p>Pedido no encontrado.</p>";
}
