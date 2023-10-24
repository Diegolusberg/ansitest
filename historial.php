<?php session_start();
include 'funciones.php';
include 'admin/config.php';

   


if (!isset($_SESSION['usuario'])) {
    header('Location: ' . RUTA);
	//$_SESSION['usuario']=$row ["usuario"];//guarda el nombre de usuario
}else{
    $sesion= traernivelacceso($bd_config);
	if($sesion[0]==2){
        header('Location: principalpsicologo.php');

    }
}

$datos = datosUsuario($bd_config);


$conexion = conexion($bd_config);

$statement = $conexion->prepare('SELECT * FROM diagnostico where id_usuario=:id ORDER BY id_resultado DESC');
$statement->execute(array(':id'=> $datos[0]));
$resultado = $statement->fetchAll();


	
	

require 'vista/historial.view.php';

?>