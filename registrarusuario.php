<?php session_start();
include 'funciones.php';
include 'admin/config.php';
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda volver a registrar un usuario.
if (isset($_SESSION['usuario'])) {
	header('Location: principal.php');
	die();
}

$empresas= traerempresas($bd_config);


// Comprobamos si ya han sido enviado los datos
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Validamos que los datos hayan sido rellenados
    $ci=$_POST['ci'];
    $nombres = $_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $edad=$_POST['edad'];
    $sexo=$_POST['sexo'];
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$id_empresa =$_POST['empresa'];

// // Tambien podemos limpiar mediante las funciones
// 	# El problema es que si lo hacemos de esta forma no estamos eliminando caracteres especiales, solo los transformamos.
	
// 	// La funcion htmlspecialchars() convierte caracteres especiales en entidades HTML, (&, "", '', <, >)
// 	$usuario = htmlspecialchars($_POST['usuario']);
// 	// La funcion trim() elimina espacio en blanco al inicio y final de la cadena de texo
// 	$usuario = trim($usuario);
// 	// stripslashes() quita las barras de un string con comillas escapadas, los \ los convierte en \'
// 	$usuario = stripslashes($usuario);

	$errores = '';

	// Comprobamos que ninguno de los campos este vacio.
	if (empty($ci) or empty($nombres) or empty($apellidos) or empty($edad) or empty($sexo) or empty($usuario) or empty($password) or empty($password2)) {
		$errores = '<li>Por favor rellena todos los datos correctamente</li>';
	} else {

		// Comprobamos que el usuario no exista ya.
		$conexion = conexion($bd_config);

		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario OR ci = :ci LIMIT 1');
		$statement->execute(array(':usuario' => $usuario,
								  ':ci'=>$ci));

		// El metodo fetch nos va a devolver el resultado o false en caso de que no haya resultado.
		$resultado = $statement->fetch();

		// Si resultado es diferente a false entonces significa que ya existe el usuario.
		if ($resultado != false) {
			$errores .= '<li>El nombre de usuario o CI ya existe</li>';
		}

		// Hasheamos nuestra contraseña para protegerla un poco.
		# OJO: La seguridad es un tema muy complejo, aqui solo estamos haciendo un hash de la contraseña,
		# pero esto no asegura por completo la informacion encriptada.
		//$password = hash('sha512', $password);
		//$password2 = hash('sha512', $password2);

		// Comprobamos que las contraseñas sean iguales.
		if ($password != $password2) {
			$errores.= '<li>Las contraseñas no son iguales</li>';
		}
	}

	// Comprobamos si hay errores, sino entonces agregamos el usuario y redirigimos.
	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO usuarios (ci,nombres,apellidos,edad,sexo,usuario, contrasena,id_empresa) 
        VALUES (:ci, :nombres, :apellidos, :edad, :sexo, :usuario, :pass, :id_empresa)');
		$statement->execute(array(
                ':ci'=>$ci,
                ':nombres'=>$nombres,
                ':apellidos'=>$apellidos,
                ':edad'=>$edad,
                ':sexo'=>$sexo,
				':usuario' => $usuario,
				':pass' => $password,
                ':id_empresa'=>$id_empresa
			));

		// Despues de registrar al usuario redirigimos para que inicie sesion.
		header('Location: login.php');
	}


}


require 'vista/registrarusuario.view.php';

?>