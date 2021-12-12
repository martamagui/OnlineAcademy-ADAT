
<?php
require 'php/connection.php';
if (isset($_SESSION["email"])) {
    $qry = "SELECT *  FROM Orders WHERE emailFk = '" . $_SESSION["email"] . "';";
    $result = $connection->query($qry);
    if ($result !== false && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $component = '
            <tr class=orders__list__item">
                <td>
                    <a href="order_detail.php"><span class="orders__item--id">' . $row["orderID"] . '</span></a>
                </td>
                <td>
                    <span class="orders__item--date">' . $row["orderDate"] . '</span>
                </td>
                <td>
                    <span class="orders__item--price">' . number_format((float)$row["totalPrice"], 2, '.', '') . '€</span>
                </td>
            </tr>';
            echo $component;
        }
    } else {
        unset($_SESSION["canOrder"]);
        echo '<tr class=orders__list__item">
        <td>
                <span class="orders__item--id"> Aún no has realizado ningún pedido.</span>
            </td>
        </tr>';
    }
}
