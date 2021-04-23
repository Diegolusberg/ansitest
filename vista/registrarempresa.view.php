<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Un formulario sirve para enviar datos a otra página que los recoge para usarlos o almacenarlos."/>
	<h1>Registrar Empresa</h1>

</head>
<LINK REL=StyleSheet HREF="css/registrarempresa.css" TYPE="text/css" MEDIA=screen>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="formDatosEmpresas">

	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" id="nombre" placeholder="Nombre de la empresa"/>

	<label for="direccion">Direccion</label>
	<input type="text" name="direccion" id="direccion" placeholder="Direccion de la empresa"/>

	<label for="ruc">Ruc</label>
	<input type ="text" name="ruc" id="ruc" placeholder="Ruc de la empresa"/>
	
	<label for="codigo">Codigo</label>
	<input type ="text" name="codigo" id="codigo" placeholder="Codigo de acceso"/>

	
	<input type="submit" name="registrar" value="Registrar"/>

			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
			<?php if(!empty($registro)): ?>
				<div class="registro">
					<ul>
						<?php echo $registro; ?>
					</ul>
				</div>
			<?php endif; ?>
</form>

</body>
</html>