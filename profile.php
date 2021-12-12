<?php
include_once 'header.php';
include_once 'php/user/get_user_info.php';
if (!isset($_SESSION["email"])) {
    header('location: ../index.php');
}
?>
<div class="edit__container">
    <h3>Editar información.</h3>
    <form action="php/user/update_name.php" method="post">
        <label for="email">Nombre</label>
        <input type="text" placeholder="Nombre" name="firstName" id="firstName">

        <label for="email">Apellidos:</label>
        <input type="text" placeholder="Apellidos" name="lastName" id="lastName">

        <input type="submit" value="Actualizar datos">
    </form>
    <form action="php/user/update_psw.php" method="post">
        <label for="psw">Contraseña: </label>
        <input type="password" placeholder="Contraseña" name="password" id="password" required>

        <label for="psw-repeat">Repita la contraseña: </label>
        <input type="password" placeholder="Repita Contraseña" name="psw-repeat" id="psw-repeat" required>

        <input type="submit" value="Cambiar contraseña">
    </form>
</div>
<div class="orders__container">
    <table class="orders__list">
        <?php
        include_once 'php/user/display_orders.php'
        ?>
    </table>
</div>

<?php
include_once 'footer.php'
?>