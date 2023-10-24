<?php session_start();
include 'admin/config.php';
include 'funciones.php';


if (!isset($_SESSION['usuario'])) {
   
    header('Location: ' . RUTA);
	//$_SESSION['usuario']=$row ["usuario"];//guarda el nombre de usuario
}else{
    $sesion= traernivelacceso($bd_config);
	if($sesion[0]==1){
        header('Location: principal.php');

    }
    $_SESSION['empresa']=null;//para que borre el registro de la ultima empresa cuando se salga de informespersonal
}







require 'vista/principalpsicologo.view.php'
?>