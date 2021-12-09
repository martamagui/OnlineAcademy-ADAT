<?php
$Element = '';
if (isset($_SESSION["email"])) {
    $Element = '';
} else {
    $Element = '
        <div class="order__login">
            <div class="login__form-popup hidden" id="myForm">
                <form action="php/login_action.php" method="post" class="login__container" id="login">
                <h2>Login</h2>
            
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Email" name="email" required>
            
                <label for="psw"><b>Contraseña</b></label>
                <input type="password" placeholder="Contraseña" name="password" required>
            
                <button type="submit" class="basic__button button-dark">Login</button>
                <p>¿Aún no tienes cuenta? <a href="signup_form.php">Crear cuenta</a></p>
            </form>
            </div>
      </div>';
}
echo $Element;
