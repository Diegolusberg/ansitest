<?php	session_start();
include 'funciones.php';
include 'admin/config.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: ' . RUTA);
	//$_SESSION['usuario']=$row ["usuario"];//guarda el nombre de usuario
}else{
    $sesion= traernivelacceso($bd_config);
	if($sesion[0]==1){
        header('Location: principal.php');

    }
}


//$id_empresa='<label id="idempresa" for="idempresa">cargil</label>';
//echo $id_empresa;

$id_usuario= datosUsuario($bd_config);
$datosempresas= traerempresasinforme($bd_config, $id_usuario[0]);
if($datosempresas==null){
	echo'<script type="text/javascript">
			alert("Debe Registrar al menos una empresa");
			window.location.href="principalpsicologo.php";
    	</script>';
	//header('Location: principalpsicologo.php');

}

//var_dump($datosusuarios);
$datosFuncionarios=null;
$datosusuarios=null;
$datos=null;


if (isset($_SESSION['empresa'])) {
	$datosusuarios=traerUsuariosEmpresa($bd_config, $_SESSION['empresa']);
}


if(isset($_POST['comentario'])) {
	

	$comentario= $_POST['comentario'];


	$conexion = conexion($bd_config);
	$statement = $conexion->prepare('UPDATE diagnostico SET comentario= :comentario WHERE id_usuario= :id_usuario AND id_resultado IN(SELECT MAX(id_resultado) FROM diagnostico GROUP BY id_usuario)' );
	$statement->execute(array(
			':comentario'=>$comentario,
			':id_usuario'=>$_SESSION['id_usuario']	
		));
	$registro='La empresa se ha registrado con exito';
	"<scrip> alert(". $registro .")</scrip>";
	// Despues de registrar al usuario redirigimos para que inicie sesion.
	header('Location: informepersonal.php');

	
}else{


	if($_SERVER['REQUEST_METHOD'] == 'POST' AND !isset($_POST['usuario'])) {
		// Validamos que los datos hayan sido rellenados
		
		$empresa= $_POST['empresa'];
		$codigo = $_POST['codigo'];
	

		$errores = '';

	// Comprobamos que ninguno de los campos este vacio.
		if (empty($empresa) or empty($codigo)) {
				$errores = '<li>Por favor rellena todos los datos correctamente</li>';
		} else {
		// Comprobamos que el usuario no exista ya.
		
				$conexion = conexion($bd_config);
				

				$statement = $conexion->prepare('SELECT codigo FROM empresas WHERE id_empresa = :empresa');
				$statement->execute(array(':empresa' => $empresa));

				// El metodo fetch nos va a devolver el resultado o false en caso de que no haya resultado.
				$resultado = $statement->fetch();
				//var_dump($resultado);
				// Si resultado es diferente a false entonces significa que ya existe el usuario.
				if ($resultado[0] != $codigo) {
					$errores .= '<li>La contraseña es incorrecta</li>';
		}

		}
	

		if ($errores == '') {
					
				$datosusuarios=traerUsuariosEmpresa($bd_config, $empresa);	
						
				$_SESSION['empresa']=$empresa;
		}
	
	
	//setcookie("empresa",$empresa);
	
	}
	
	
	if(isset($_POST['usuario'])) {
	
	/*if($_COOKIE['empresa']){
		$empresa= $_COOKIE['empresa'];
		$datosusuarios=traerUsuariosEmpresa($bd_config, $empresa);
	}*/
			if (isset($_SESSION['empresa'])) {
				$datosusuarios=traerUsuariosEmpresa($bd_config, $_SESSION['empresa']);
			}
		
	
			$usuario = $_POST['usuario'];
			$conexion = conexion($bd_config);
	

			$statement = $conexion->prepare('SELECT  u.id_usuario, u.nombres, u.apellidos, d.id_preguntaV, d.id_respuestaV, d.id_regla FROM diagnostico d
			INNER JOIN usuarios u ON d.id_usuario=u.id_usuario
			INNER JOIN empresas e ON e.id_empresa=u.id_empresa where id_resultado IN(SELECT MAX(id_resultado) FROM diagnostico GROUP BY id_usuario) AND u.id_usuario=:id');
			$statement->execute(array(':id'=> $usuario));
			$datos = $statement->fetchAll();
			//var_dump($datos);
			if($datos!=null){
			$_SESSION['id_usuario']=$datos[0][0];
			}
	//header('Location: login.php');
		
	}
}






require 'vista/informepersonal.view.php'

?>
											