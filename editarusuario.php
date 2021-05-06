<?php session_start();
include 'funciones.php';


// Comprobamos si ya tiene una sesion
# Si ya tiene una sesion redirigimos al contenido, para que no pueda volver a registrar un usuario.


$empresas= traerempresas();

$datos= datosUsuarioTotal();


// Comprobamos si ya han sido enviado los datos
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Validamos que los datos hayan sido rellenados
    $idusuario=$_POST['ci'];
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
	if (empty($idusuario) or empty($nombres) or empty($apellidos) or empty($edad) or empty($sexo) or empty($usuario) or empty($password) or empty($password2)) {
		$errores = '<li>Por favor rellena todos los datos correctamente</li>';
	} else {

		// Comprobamos que el usuario no exista ya.
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=ansitest', 'root', '');
		} catch (PDOException $e) {
			echo "Error:" . $e->getMessage();
		}

		$statement = $conexion->prepare('SELECT usuario FROM usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));

		// El metodo fetch nos va a devolver el resultado o false en caso de que no haya resultado.
		$resultado = $statement->fetch();
		//var_dump($resultado);
		// Si resultado es diferente a false entonces significa que ya existe el usuario.
		if ($resultado != false) {
			if($resultado[0]!=$_SESSION['usuario']){
			$errores .= '<li>El nombre de usuario ya existe</li>';
			}
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
		$statement = $conexion->prepare('INSERT INTO usuarios (id_usuario,nombres,apellidos,edad,sexo,usuario, contrasena,id_empresa) 
        VALUES (:id_usuario, :nombres, :apellidos, :edad, :sexo, :usuario, :pass, :id_empresa)
		ON DUPLICATE KEY UPDATE id_usuario=:id_usuario, nombres=:nombres, apellidos=:apellidos, edad=:edad, sexo=:sexo, usuario=:usuario, contrasena=:pass, id_empresa=:id_empresa');
		$statement->execute(array(
                ':id_usuario'=>$idusuario,
                ':nombres'=>$nombres,
                ':apellidos'=>$apellidos,
                ':edad'=>$edad,
                ':sexo'=>$sexo,
				':usuario' => $usuario,
				':pass' => $password,
                ':id_empresa'=>$id_empresa
			));

		// Despues de registrar al usuario redirigimos para que inicie sesion.
		header('Location: principal.php');
	}


}


require 'vista/editarusuario.view.php';

?>