<?php
include_once 'header.php'
?>
<div class="signup__form-popup hidden">
  <form action="php/signup_action.php" method="post">
    <h2>Crear nueva cuenta</h2>
    <p>Please fill in this form to create an account.</p>

    <label for="email">¿Cómo te llamas?</label>
    <input type="text" placeholder="Nombre" name="firstName" id="firstName" required>

    <label for="email">Apellidos:</label>
    <input type="text" placeholder="Apellidos" name="lastName" id="lastName" required>

    <label for="email">Email: </label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw">Contraseña: </label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <label for="psw-repeat">Repita la contraseña: </label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

    <button type="submit" class="button-dark basic__button">Registrarme</button>
  </form>
</div>
<div class="container signin">
  <p>Already have an account? <a href="#">Sign in</a>.</p>
  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
</div>
<?php
include_once 'footer.php'
?>