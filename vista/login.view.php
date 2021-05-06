<link href='css/login.css' rel='stylesheet' type='text/css'>

<div class="login">
      <div class="login-header">
        <h1>Ansitest</h1>
      </div>

          <form name="login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <div class="login-form">
                          <h3>Username:</h3>
                          <input type="text" name="usuario" placeholder="Username"/><br>
                          <h3>Password:</h3>
                          <input type="password" name="password" placeholder="Password"/>
                          <br>
                          <input type="submit" value="Login" class="button"/>
                      <div>
                          <br>
                          <?php if(!empty($errores)): ?>
				                    <div class="error">
                                <ul>
                                      <?php echo $errores; ?>
                                </ul>
				                     </div>
		                      <?php endif; ?>
                          <a class="sign-up" href="registrarusuario.php">Registrarse</a>
                          <br>
                      </div>
                      <!--<h6 class="no-access">No puede acceder a su cuenta?</h6>-->
                    </div>
          </form>
                      <div class="centerdiv">
                      <button class="button2" onclick="location.href='registrarempresa.php'">Registrar Empresa</button>
                      <button class="button2" onclick="location.href='informes.php'">Informes Empresas</button>
                      </div>
    </div>

<!--<div class="error-page">
  <div class="try-again">Error: Intentelo de nuevo?</div>
</div>-->