<?php
include_once 'header.php';
?>

<?php
if (!isset($_SESSION["email"])) {
    header('location: ../index.php');
}
include_once 'php/user/display_order_details.php';
?>

<?php
include_once 'footer.php'
?>