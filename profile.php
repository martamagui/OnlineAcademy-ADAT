<?php
include_once 'header.php';
include_once 'php/user/get_user_info.php';
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
    <form action="php/user/change_psw.php" method="post">
        <label for="psw">Contraseña: </label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>

        <label for="psw-repeat">Repita la contraseña: </label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

        <input type="submit" value="Cambiar contraseña">
    </form>
</div>
<div class="orders__container"></div>

<?php
include_once 'footer.php'
?>