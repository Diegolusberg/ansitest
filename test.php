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
	if(!empty($_POST['resp'])){
			$respuestasV =$_POST['resp'];
			$respuestasString = implode(";", $respuestasV);
			
			$suma=0;
			foreach($respuestasV as $valores){
				$suma= $suma+$valores;
				
			}
			//echo $suma;


			$errores = '';
			if (count($respuestasV)<12) {
				$errores = 'Por favor rellena todos los datos';
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
				

				//compara resultados
				if($suma<6){
					$var= "0-5";
				}elseif($suma<=15){
					$var= "6-14";
				}else{
					$var= ">=15";
				}
				
				$reglas= traerReglas($var);
				//var_dump($reglas);
				
				$id_regla=$reglas[0]["id_regla"];
				/*foreach($reglas as $regla){
					foreach($regla as $condicion){
					
					}
				}*/	
					$statement = $conexion->prepare('INSERT INTO diagnostico (id_usuario, id_preguntaV, id_respuestaV, id_regla) 
					VALUES (:id_usuario, :id_preguntaV, :id_respuestaV, :id_regla) ON DUPLICATE KEY UPDATE id_preguntaV= :id_preguntaV, id_respuestaV= :id_respuestaV, id_regla= :id_regla');
					$statement->execute(array(
							':id_usuario'=>$datos[0],
							':id_preguntaV'=>$preguntasString,
							':id_respuestaV'=>$respuestasString,
							':id_regla'=>$id_regla
						));
					
				//header('Location: resultadostest.php');
						$diagnostico= traerDiagnostico($datos[0]);
			}
	}else{
		$errores = 'Debe completar para obtener resultados';
	}

}


require 'vista/test.view.php';


?>