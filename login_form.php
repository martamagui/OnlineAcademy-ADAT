<?php
include_once 'header.php'
?>
<div class="login__form-popup hidden" id="myForm">
  <form action="php/login_action.php" method="post" class="login__container">
    <h2>Login</h2>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email" name="email" required>

    <label for="psw"><b>Contraseña</b></label>
    <input type="password" placeholder="Contraseña" name="password" required>

    <button type="submit" class="basic__button button-dark">Login</button>
    <p>¿Aún no tienes cuenta? <a href="php/signup_action.php">Crear cuenta</a></p>
  </form>
</div>

<?php
include_once 'footer.php'
?>