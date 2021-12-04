<?php
session_start();
require 'connection.php';
$courseId = $_GET["course"];
$cartId = $_GET["cartId"];
$user = $_SESSION["email"];
echo $courseId . " Cart:" . $cartId;
$result = $connection->query("DELETE FROM ShoppingCartDetails WHERE cartIDfk='" . $cartId . "' AND courseIDfk='" . $courseId . "';");
header('Location: ' . $_SERVER['HTTP_REFERER']);

