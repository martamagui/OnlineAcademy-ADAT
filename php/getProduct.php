<?php
session_start();
require 'connection.php';


$user = $_SESSION["email"];

$today = date("y-m-d"); 
$qryShoppingCart = "";

$result = $connection ->query("SELECT * FROM ShoppingCart WHERE emailFk='".$user."';");

if($result-> num_rows <= 0){
    $qryShoppingCart = "INSERT INTO ShoppingCart(cartDate, emailFk) VALUES ('" .$today." ', '".$user."');";
}else{
    $qryShoppingCart = "UPDATE ShoppingCart SET cartDate='".$today."' WHERE emailFk='".$user."'";
}
$resultShoppingCartUpdate = $connection ->query($qryShoppingCart);

$qryInserts = "INSERT INTO ShoppingCart(cartDate, emailFk) VALUES ('2021-11-19', '.$user.');";