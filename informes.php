<?php

try {
	$conexion = new PDO('mysql:host=localhost;dbname=ansitest', 'root', '');
} catch (PDOException $e) {
	echo "Error:" . $e->getMessage();
}

$statement = $conexion->prepare('SELECT * FROM empresas order by nombre');
$statement->execute();
$resultado= $statement->fetchAll();


require 'vista/informes.view.php'

?>