<?php
include_once 'header.php'
?>
<div class="login__form hidden edit__container" id="myForm">
  <form action="php/login_action.php" class="form__container" method="post" class="login__container" id="login">
    <h2 class="form__item">Login</h2>

    <label for="email" class="form__item"><b>Email</b></label>
    <input type="text" placeholder="Email" name="email" required class="form__item">

    <label class="form__item" for="psw"><b>Contraseña</b></label>
    <input class="form__item" type="password" placeholder="Contraseña" name="password" required>

    <button type="submit" class="basic__button button-dark form__item">Login</button>
    <p class="form__item">¿Aún no tienes cuenta? <a href="signup_form.php">Crear cuenta</a></p>
  </form>
</div>

<?php
include_once 'footer.php'
?>