<?php session_start();
include 'admin/config.php';
$_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
    header('Location: ' . RUTA);
	//$_SESSION['usuario']=$row ["usuario"];//guarda el nombre de usuario
}

require 'vista/principal.view.php'

?>