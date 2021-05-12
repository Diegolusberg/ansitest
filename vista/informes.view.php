<!DOCTYPE html>
<html>
<head>
	<title>Informe</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Un formulario sirve para enviar datos a otra página que los recoge para usarlos o almacenarlos."/>
	<h1>Seleccione la empresa</h1>

</head>
<LINK REL=StyleSheet HREF="css/informes.css" TYPE="text/css" MEDIA=screen>
<body>

<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> target="" method="POST" name="formDatosEmpresas">
    
		<label for="id_empresa">Empresa</label>
		<select name="empresa">
        <?php
        foreach ($datosempresas as $empresas) {
          echo '<option value='.$empresas['id_empresa'].'>'. $empresas['nombre']; }'</option>'
        ?>
		</select>

		<label for="codigo">Codigo</label>
		<input type ="password" name="codigo" id="codigo" placeholder="Codigo de acceso"/>

	
	<input type="submit" name="informe" value="Informe"/>

		<?php if(!empty($errores)): ?>
					<div class="error">
						<ul>
							<?php echo $errores; ?>
						</ul>
					</div>
		<?php endif; ?>
</form>


</body>
<?php if($_SERVER['REQUEST_METHOD'] == 'POST' AND $datosFuncionarios!=null){?>
<h2>Historial de Usuarios</h2>
<div class="historial">
    <div class="pregunta"> <?php    
                                    if($datosFuncionarios==null){
                                      echo "<h1>No se encuentran test</h1>";
                                    }else{
										if($datosFuncionarios!=null){
											$indice=0;
											//$contador=0;
											foreach($datosFuncionarios as $valores){
							
												list($nombres,$apellidos,$pregunta, $respuesta,$regla) = $valores;//Trae valores y guarda en forma de string para hacer el explode,hacemos asi porque fetchAll trae arrays de array y resulta complicado manipular

												//$nombres= explode(";", $nombres);
												$preguntas = explode(";", $pregunta);
												$respuestas = explode(";", $respuesta);
												

												//echo $nombres." ".$apellidos."<br>";
												echo '<span style="color:black; font-size:30px;">'.$nombres." ".$apellidos."<br>".'</span>';
												//while($contador<$indice){ 
													//$contador++;
													$i=0;
													while($i<12){
													   if($respuestas[$i]==0){
														 $respuestas[$i]="Ausente";
													   }elseif($respuestas[$i]==1){
														 $respuestas[$i]="Intensidad Ligera";
													   }elseif($respuestas[$i]==2){
														 $respuestas[$i]="Intensidad Media";
													   }elseif($respuestas[$i]==3){
														 $respuestas[$i]="Intensidad Elevada";
													   }elseif($respuestas[$i]==4){
														 $respuestas[$i]="Intensidad Máxima (Invalidante)";
													   }
													   echo "Pregunta: $preguntas[$i] Respuesta: $respuestas[$i] <br>";
														 $i++;
														
													 }
													 if($regla==1){
														echo '<span style="color:green; font-size:25px;">'."Diagnóstico: No se detecta ansiedad".'</span>';
													 }elseif($regla==2){
														echo '<span style="color:yellow; font-size:25px;">'."Diagnóstico: Ansiedad leve".'</span>';
													 }else{
														echo '<span style="color:red; font-size:25px;">'."Diagnóstico: Ansiedad moderada/Grave".'</span>';
													 }
													 echo "<br><br>"; 
											   //}
											   
											}                                            
										}
                                                
											
												
												
                                          	
									}


                            ?>
                                                
    </div>
</div>
<?php } ?>

</html>