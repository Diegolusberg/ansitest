<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Un formulario sirve para enviar datos a otra página que los recoge para usarlos o almacenarlos."/>

	<?php
		$sesion=false;
		if($sesion){
	?>
	<h1>Editar Datos</h1>
	<?php
		}else{
	?>
	<h1>Registrar Datos</h1>
	<?php
	}
	?>

</head>
<LINK REL=StyleSheet HREF="css/registrarusuario.css" TYPE="text/css" MEDIA=screen>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">

	<label for="ci">CI</label>
	<input type ="text" name="ci" id="ci" placeholder="Nro. de documento"/>

	<label for="nombres">Nombres</label>
	<input type="text" name="nombres" id="nombres" placeholder="Nombres"/>

	<label for="apellidos">Apellidos</label>
	<input type="text" name="apellidos" id="apellidos" placeholder="Apellidos"/>

	<label for="edad">Edad</label>
	<input type ="text" name="edad" id="edad" placeholder="Edad"/>

	<label>Sexo</label>
	<select name="sexo">
    <option value="1" selected>Masculino</option>
    <option value="2">Femenino</option> <!-- Opción por defecto -->
  	</select>
	<label>Empresa: </label>
    <select name="empresa">
        <?php
        foreach ($resultado as $empresas) {
          echo '<option value='.$empresas['id_empresa'].'>'. $empresas['nombre']; }'</option>'
        ?>
    </select>
	  
	<label for="usuario">Usuario</label>
	<input type ="text" name="usuario" id="usuario" placeholder="Usuario"/>

	<label for="password">Contraseña</label>
	<input type="password" name="password" id="password" placeholder="Password" require/>
	
	<label for="password2">Repetir</label>
	<input type="password" name="password2" id="password2" placeholder="Repetir Contraseña" require/>

	 <input type="submit" name="registrar" value="Registrar"/>

	 <?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
</form>

</body>
</html>