<?php
session_start();
unset($_SESSION["email"]);
session_destroy();
session_write_close();
header('location: ../index.php');
