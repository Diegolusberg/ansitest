<?php session_start();
include 'funciones.php';
include 'admin/config.php';


if (!isset($_SESSION['usuario'])) {
    header('Location: ' . RUTA);
	//$_SESSION['usuario']=$row ["usuario"];//guarda el nombre de usuario
}

$datos = datosUsuario($bd_config);


$conexion = conexion($bd_config);

$statement = $conexion->prepare('SELECT * FROM diagnostico where id_usuario=:id');
$statement->execute(array(':id'=> $datos[0]));
$resultado = $statement->fetchAll();

if($resultado!=null){
	
	foreach($resultado as $valores){

		list(,,$pregunta, $respuesta,$regla) = $valores;//Trae valores y guarda en forma de string para hacer el explode
									 			//hacemos asi porque fetchAll trae arrays de array y resulta complicado manipular
		}                                            
	$preguntas = explode(";", $pregunta);	
	$respuestas = explode(";", $respuesta);
	//var_dump($preguntas);
}

require 'vista/historial.view.php';

?>