<?php 
include 'funciones.php';
session_start();
$datos = datosUsuario();

try {
	$conexion = new PDO('mysql:host=localhost;dbname=ansitest', 'root', '');
} catch (PDOException $e) {
	echo "Error:" . $e->getMessage();
}
		$statement = $conexion->prepare('SELECT descripcion FROM preguntas order by id_pregunta');
		$statement->execute();
		//$preguntasV= $statement->fetchAll();
		$preguntasV = $statement->fetchAll(PDO::FETCH_COLUMN, 0);//trae los datos en un solo array para hacer el implode
		function traerPreguntas(int $indice, array $preguntas){
			$i=0;
			foreach($preguntas as $preg){
			  if($i==$indice){
				echo $preg;
			  }
			  $i++;
			}
}

		

// Comprobamos si ya han sido enviado los datos
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $respuestasV =$_POST['resp'];
    $respuestasString = implode(";", $respuestasV);
	

	$errores = '';
	if (count($respuestasV)<12) {
		$errores = '<li>Por favor rellena todos los datos</li>';
	} else {
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=ansitest', 'root', '');
			} catch (PDOException $e) {
				echo "Error:" . $e->getMessage();
			}
			$statement = $conexion->prepare('SELECT id_pregunta FROM preguntas order by id_pregunta');
			$statement->execute();
			//$preguntasV= $statement->fetchAll();
			$preguntasVector = $statement->fetchAll(PDO::FETCH_COLUMN, 0);//trae los datos en un solo array para hacer el implode
			//var_dump($preguntasV);
			$preguntasString = implode(";", $preguntasVector);
			//echo $preguntasString;
			
	}

	// Comprobamos si hay errores, sino entonces agregamos el usuario y redirigimos.
	if ($errores == '') {
		//if($datos[0]) {
		$statement = $conexion->prepare('INSERT INTO diagnostico (id_usuario, id_preguntaV, id_respuestaV) 
        VALUES (:id_usuario, :id_preguntaV, :id_respuestaV) ON DUPLICATE KEY UPDATE id_preguntaV= :id_preguntaV, id_respuestaV= :id_respuestaV');
		$statement->execute(array(
                ':id_usuario'=>$datos[0],
                ':id_preguntaV'=>$preguntasString,
                ':id_respuestaV'=>$respuestasString
			));
		/*}else{
			$statement = $conexion->prepare('UPDATE diagnostico SET  id_preguntaV = :id_preguntaV, id_respuestaV= :id_respuestaV WHERE id_usuario=:id_usuario');
				$statement->execute(array(
                ':id_usuario'=>$datos[0],
                ':id_preguntaV'=>$preguntasString,
                ':id_respuestaV'=>$respuestasString
				));

				}*/
			
		header('Location: principal.php');
	}
}


require 'vista/test.view.php';


?>