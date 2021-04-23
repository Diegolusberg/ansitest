<?php


// Comprobamos si ya han sido enviado los datos
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Validamos que los datos hayan sido rellenados
    $nombre = $_POST['nombre'];
    $direccion =$_POST['direccion'];
    $ruc=$_POST['ruc'];
    $codigo=$_POST['codigo'];


	$errores = '';
    $registro='';

	// Comprobamos que ninguno de los campos este vacio.
	if (empty($nombre) or empty($direccion) or empty($ruc) or empty($codigo)) {
		$errores = '<li>Por favor rellena todos los datos correctamente</li>';
	} else {

		try {
			$conexion = new PDO('mysql:host=localhost;dbname=ansitest', 'root', '');
		} catch (PDOException $e) {
			echo "Error:" . $e->getMessage();
		}

		$statement = $conexion->prepare('SELECT * FROM empresas WHERE nombre = :nombre LIMIT 1');
		$statement->execute(array(':nombre' => $nombre));

		// El metodo fetch nos va a devolver el resultado o false en caso de que no haya resultado.
		$resultado = $statement->fetch();

		// Si resultado es diferente a false entonces significa que ya existe la empresa.
		if ($resultado != false) {
			$errores .= '<li>Ya existe una empresa con ese nombre</li>';
		}
	}

	// Comprobamos si hay errores, sino entonces agregamos el usuario y redirigimos.
	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO empresas (nombre,direccion,ruc,codigo) 
        VALUES (:nombre, :direccion, :ruc, :codigo)');
		$statement->execute(array(
                ':nombre'=>$nombre,
                ':direccion'=>$direccion,
                ':ruc'=>$ruc,
                ':codigo'=>$codigo
			));
        $registro='<li>La empresa se ha registrado con exito</li>';
		// Despues de registrar al usuario redirigimos para que inicie sesion.
		//header('Location: login.php');
	}


}

require 'vista/registrarempresa.view.php';

?>