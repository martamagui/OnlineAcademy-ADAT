<?php
require 'connection.php';
$sql = "SELECT * FROM Courses";

if (isset($_GET["value"]) && $_GET["value"] != 'All') {
    $category = $_GET["value"];
    $sql = $sql . " WHERE category = '" . $category . "'";
} else if (isset($_POST['category']) && $_POST['category'] != 'All') {
    $sql = $sql . " WHERE category = '" . $_POST['category'] . "'";
}

if (isset($_POST['orderBy'])) {
    $orderBy = $_POST['orderBy'];
    if ($orderBy == "title") {
        $sql = $sql .  " ORDER BY title";
    } else if ($orderBy == "price") {
        $sql = $sql .  " ORDER BY price ASC";
    } else if ($orderBy == "priceDesc") {
        $sql = $sql . " ORDER BY price DESC";
    }
}
if (isset($_GET['limit'])) {
    $limit = $_GET['limit'];
    $sql = $sql . " LIMIT " . $limit;
}
$result = mysqli_query($connection, $sql) or die("Ups there was a conecction problem :S");

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<form action='php/getProduct.php?course=" . $row["courseID"] . "' method='post' class ='product__card'>";
        echo "<a href='product_detail.php?course=" . $row["courseID"] . "'><img src='img/" . $row["imgName"] . "' /></a>";
        echo "<div class ='product__card__info'>";
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<span> Curso impartido por " . $row["teacher"] . "</span> ";
        echo "<a href='courses_list.php?value=" . $row["category"] . "'>" . $row["category"] . "</a>";
        echo "<input type='submit' value='" . number_format((float)$row["price"], 2, '.', '') . " €' class='basic__button button-dark''/>";
        echo "</div>";
        echo "</form>";
    }
} else {
    echo "0 results";
}

mysqli_close($connection);
