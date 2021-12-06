<div class='products__container'>
    <?php
    require 'connection.php';
    $sql = "";
    $sql = "SELECT * FROM Courses";
    $result = mysqli_query($connection, $sql) or die("Ups there was a conecction problem :S");

    //TODO Arreglar el que se añadan al carrito de la compra
    if ($result->num_rows > 0) {
        for ($i = 0; $i < 6; $i++) {
            $row = $result->fetch_assoc();
            echo "<form action='php/getProduct.php?course=" . $row["courseID"] . "' method='post' class ='product__card'>";
            echo "<a href=''><img src='img/" . $row["imgName"] . "' /></a>";
            echo "<div class ='product__card__info'>";
            echo "<h2>" . $row["title"] . "</h2>";
            echo "<span> Curso impartido por " . $row["teacher"] . "</span> ";
            echo "<a href='showCategory.php?value=" . $row["category"] . "'>" . $row["category"] . "</a>";
            echo "<input type='submit' value='" . number_format((float)$row["price"], 2, '.', '') . " €' class='basic__button button-dark''/>";
            echo "</div>";
            echo "</form>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($connection);

    ?>
</div>