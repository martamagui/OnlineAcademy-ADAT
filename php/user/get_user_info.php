<?php
require 'php/connection.php';
if (isset($_SESSION["email"])) {
    $user = $_SESSION["email"];
    $result = $connection->query("SELECT * FROM Users WHERE email ='" . $_SESSION["email"] . "';");
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $userContainer = '
            <div class="user__container">
                <h1>¡Hola, ' . $row["firstName"] . ' ' . $row["lastName"] . '!</h1>
                <h2>' . $row["email"] . '</h2>
            </div>';
            echo $userContainer;
        }
    } else {
        unset($_SESSION["canOrder"]);
        echo "<p>Ha ocurrido un error en la conexión</p>";
    }
    mysqli_close($connection);
} else {
    echo "<p>Parece que no estás loggeado.</p>";
}
