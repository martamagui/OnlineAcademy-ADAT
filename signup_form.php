<?php
include_once 'header.php'
?>
<div class="signup__form hidden">
  <form action="php/signup_action.php" method="post">
    <h2>Crear nueva cuenta</h2>

    <label for="email" class="form__item">¿Cómo te llamas?</label>
    <input type="text" placeholder="Nombre" name="firstName" id="firstName" class="form__item" required>

    <label for="email" class="form__item">Apellidos:</label>
    <input type="text" placeholder="Apellidos" name="lastName" id="lastName" class="form__item" required>

    <label for="email" class="form__item">Email: </label>
    <input type="text" placeholder="Enter Email" name="email" id="email" class="form__item" required>

    <label for="psw" class="form__item">Contraseña: </label>
    <input class="form__item" type="password" placeholder="Enter Password" name="password" id="password" required>

    <label for="psw-repeat" class="form__item">Repita la contraseña: </label>
    <input class="form__item" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

    <button type="submit" class="button-dark basic__button form__item">Registrarme</button>
  </form>

  <div class="container__signin">
    <p class="form__item">Already have an account? <a href="login_form.php">Sign in</a>.</p>
    <p class="form__item">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
  </div>
</div>
<?php
include_once 'footer.php'
?>