<?php session_start();
include 'funciones.php';
include 'admin/config.php';
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (!isset($_SESSION['usuario'])) {
    header('Location: ' . RUTA);
	//$_SESSION['usuario']=$row ["usuario"];//guarda el nombre de usuario
}else{
    $sesion= traernivelacceso($bd_config);
	if($sesion[0]==1){
        header('Location: principal.php');

    }
}


$id_usuario= datosUsuario($bd_config);

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

		$conexion= conexion($bd_config);

		$statement = $conexion->prepare('SELECT * FROM empresas WHERE nombre = :nombre OR ruc=:ruc');
		$statement->execute(array(':nombre' => $nombre,
								  ':ruc'=>$ruc
									));

		// El metodo fetch nos va a devolver el resultado o false en caso de que no haya resultado.
		$resultado = $statement->fetchAll();

		// Si resultado es diferente a false entonces significa que ya existe la empresa.
		if ($resultado != false) {
			$errores .= '<li>Ya existe una empresa con ese nombre o ruc</li>';
		}
	}

	// Comprobamos si hay errores, sino entonces agregamos el usuario y redirigimos.
	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO empresas (nombre,direccion,ruc,codigo,usuario) 
        VALUES (:nombre, :direccion, :ruc, :codigo, :usuario)');
		$statement->execute(array(
                ':nombre'=>$nombre,
                ':direccion'=>$direccion,
                ':ruc'=>$ruc,
                ':codigo'=>$codigo,
				':usuario'=>$id_usuario[0]
			));
        $registro='La empresa se ha registrado con exito';
		// Despues de registrar al usuario redirigimos para que inicie sesion.
		header('Location: login.php');
	}


}

require 'vista/registrarempresa.view.php';

?>