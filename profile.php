<?php
include_once 'header.php';
?>
<div class="profile__container">
    <?php
    include_once 'php/user/get_user_info.php';
    if (!isset($_SESSION["email"])) {
        header('location: ../index.php');
    }
    ?>

    <div class="edit__container">
        <h3>Editar información.</h3>
        <form action="php/user/update_name.php" method="post" class="form__container">
            <label for="email" class="form__item">Nombre</label>
            <input type="text" class="form__item" placeholder="Nombre" name="firstName" id="firstName">

            <label for="email" class="form__item">Apellidos:</label>
            <input type="text" class="form__item" placeholder="Apellidos" name="lastName" id="lastName">

            <input type="submit" value="Actualizar datos" class="basic__button button-dark">
        </form>
        <form action="php/user/update_psw.php" method="post" class="form__container">
            <label for="psw" class="form__item">Contraseña: </label>
            <input type="password" class="form__item" placeholder="Contraseña" name="password" id="password" required>

            <label for="psw-repeat" class="form__item">Repita la contraseña: </label>
            <input type="password" class="form__item" placeholder="Repita Contraseña" name="psw-repeat" id="psw-repeat" required>

            <input type="submit" value="Cambiar contraseña" class="basic__button button-dark">
        </form>
    </div>
    <div class="orders__container">
        <table class="orders__list">
            <tr class="orders__list__titles">
                <td>
                    <span class="orders__item--id">Código de pedido</span>
                </td>
                <td>
                    <span class="orders__item--date">Fecha</span>
                </td>
                <td>
                    <span class="orders__item--price">Precio</span>
                </td>
            </tr>
            <?php
            include_once 'php/user/display_orders.php'
            ?>
        </table>
    </div>
</div>

<?php
include_once 'footer.php'
?>