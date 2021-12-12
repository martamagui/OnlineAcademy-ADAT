<div class='products__container'>
    <?php
    require 'connection.php';
    $sql = "";
    $sql = "SELECT * FROM Courses";
    $result2 = mysqli_query($connection, $sql) or die("Ups there was a conecction problem :S");

    $cursosComprados = array();
    if (isset($_SESSION["email"])) {
        $user = $_SESSION["email"];
        $result = $connection->query("SELECT * FROM Users WHERE  email='" . $user . "' ");
        if ($result !== false && $result->num_rows > 0) {
            $resultCourses = $connection->query("SELECT * FROM UserCourses WHERE emailFk='" . $user . "' ");
            if ($resultCourses !== false && $resultCourses->num_rows > 0) {
                while ($row = $resultCourses->fetch_assoc()) {
                    array_push($cursosComprados, $row["courseIDfk"]);
                }
            }
        }
    }

    if ($result2->num_rows > 0) {
        for ($i = 0; $i < 6; $i++) {
            $row = $result2->fetch_assoc();
            echo "<form action='php/getProduct.php?course=" . $row["courseID"] . "' method='post' class ='product__card'>";
            echo "<a href='product_detail.php?course=" . $row["courseID"] . "'><img src='img/" . $row["imgName"] . "' /></a>";
            echo "<div class ='product__card__info'>";
            echo "<h2>" . $row["title"] . "</h2>";
            echo "<span> Curso impartido por " . $row["teacher"] . "</span> ";
            echo "<a href='showCategory.php?value=" . $row["category"] . "'>" . $row["category"] . "</a>";
            echo "<input type='submit' value='";
            if (in_array($row["courseID"], $cursosComprados)) {
                echo "Ya en propiedad' disabled class='basic__button button-disabled'/>";
            } else {
                echo  number_format((float)$row["price"], 2, '.', '') . " €' class='basic__button button-dark''/>";
            }
            echo "</div>";
            echo "</form>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($connection);

    ?>
    <form action="complete_order.php">

    </form>
</div>