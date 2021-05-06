<?php session_start();
$_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
	//$_SESSION['usuario']=$row ["usuario"];//guarda el nombre de usuario
}

require 'vista/principal.view.php'

?>