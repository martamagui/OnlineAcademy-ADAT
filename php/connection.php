<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "OnlineAcademy";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);