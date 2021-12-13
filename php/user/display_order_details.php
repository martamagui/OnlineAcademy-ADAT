<?php
if (isset($_GET["order"]) && isset($_GET["date"])) {
    require 'php/connection.php';

    //TODO recoger detalles pedidos
    $user = $_SESSION["email"];
    $result = $connection->query(("Select * FROM OrderDetails,Courses WHERE OrderDetails.orderIDfk='" . $_GET["order"] . "' AND OrderDetails.courseIDfk = Courses.courseID ;"));

    if ($result !== false && $result->num_rows > 0) {
        $elementHeader = '
        <div class="order__information__container">
            <div class="order__information__header">
                <h2>Pedido: ' . $_GET["order"] . '</h2>
                <h3>Realizado el: ' . $_GET["date"] . '</h3>
            </div>';
        echo  $elementHeader;
        while ($row = $result->fetch_assoc()) {
            $orderComponent = '
                <div class="order__list__container">
                    <ul class="order__list">
                        <li class="order__list__item">
                            <a href=""><img src="img/' . $row["imgName"] . '" /></a>
                            <span>' . $row["title"] . '</span>
                            <span>' . number_format((float)$row["price"], 2, '.', '') . ' €</span>
                        </li>
                    </ul> ';
            echo $orderComponent . ' </div> ';
        }
        echo "</div>";
    }
    $resultTotal = $connection->query(("Select * FROM Orders WHERE orderID='" . $_GET["order"] . "';"));
    if ($resultTotal !== false && $resultTotal->num_rows > 0) {
        while ($row = $resultTotal->fetch_assoc()) {
            echo '<p>Total: ' . number_format((float)$row["totalPrice"], 2, '.', '') . ' €</p>';
        }
    }

    mysqli_close($connection);
} else {
    echo "<p>Pedido no encontrado.</p>";
}
