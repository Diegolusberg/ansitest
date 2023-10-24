<?php session_start();
include 'funciones.php';
include 'admin/config.php';

// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda acceder al formulario
if (isset($_SESSION['usuario'])) {
	$sesion= traernivelacceso($bd_config);
	if($sesion[0]==1){
	header('Location: principal.php');
	}else{
	header('Location: principalpsicologo.php');
	}
	//$_SESSION['usuario']=$row ["usuario"];//guarda el nombre de usuario
	die();
}


// Comprobamos si ya han sido enviado los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	//$password = hash('sha512', $password);

	// Nos conectamos a la base de datos
	$conexion = conexion($bd_config);

	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :password');
	$statement->execute(array(
			':usuario' => $usuario,
			':password' => $password
		));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
		if($resultado[8]==1){
		header('Location: principal.php');
		}else{
		header('Location: principalpsicologo.php');
		}
	} else {
		$errores = '<li>Datos incorrectos</li>';
	}
}

require 'vista/login.view.php';

?>