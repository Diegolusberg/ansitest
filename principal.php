<?php session_start();
include 'admin/config.php';
include 'funciones.php';
$_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
    header('Location: ' . RUTA);
	//$_SESSION['usuario']=$row ["usuario"];//guarda el nombre de usuario
}else{
    $sesion= traernivelacceso($bd_config);
	if($sesion[0]==2){
        header('Location: principalpsicologo.php');

    }
}

require 'vista/principal.view.php'

?>