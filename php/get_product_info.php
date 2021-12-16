<?php
require 'connection.php';
$courseId = $_GET["course"];
$sql = "SELECT * FROM Courses where courseID=" . $courseId . " LIMIT 1";
$result = mysqli_query($connection, $sql) or die("Ups there was a conecction problem :S");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        printProduct($courseId, $row["title"], $row["teacher"], $row["courseDes"], $row["rate"], $row["category"], $row["imgName"], $row["price"]);
    }
}

function printProduct($courseId, $title, $teacher, $courseDes, $rate, $category, $imgName, $price)
{
    $product = "<div class='detail__container'>
    <h1 class='detail__title'>$title</h1>
    <div class='detail__block'>
    <div class='detail__wrapper'>
    <img src='img/$imgName' alt='course_img' class='detail__img'>
        <div class='detail__wrapper--text' > 
            <h2 class='detail__subtitle' id='teacher'>$teacher</h2>
            <span class='detail_rate'>" . number_format((float)$rate, 2, '.', '') . " ⭐</span>
            <a href='courses_list.php?value=$category'>$category</a>
        </div>
        
    </div>
    
    <p class='detail__description'>$courseDes</p>
    <form action='php/getProduct.php?course=$courseId' method='post' class ='product__card'>
    <input type='submit' value='" . number_format((float)$price, 2, '.', '') . " €' class='basic__button button-dark''/>
    </form>
    </div>
    </div>";
    echo $product;
}
