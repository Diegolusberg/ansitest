<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
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
<?php 

if($datosFuncionarios==null AND $_SERVER['REQUEST_METHOD'] == 'POST'){
	echo "<h1>No se encuentran test</h1>";}

if($_SERVER['REQUEST_METHOD'] == 'POST' AND $datosFuncionarios!=null){

?>


<h2>Usuario</h2>
<div class="historial">
    <div class="pregunta" ><?php    
                                    
										if($datosFuncionarios!=null){
											$indice=0;
											//$ind= x($datosFuncionarios);
											//$contador=0;
										 
												
												
												
											
										
											
											foreach($datosFuncionarios as $valores){
											
												
												list($id_usuario, $nombres,$apellidos,$pregunta, $respuesta,$regla,$comentario) = $valores;//Trae valores y guarda en forma de string para hacer el explode,hacemos asi porque fetchAll trae arrays de array y resulta complicado manipular
												
												//$nombres= explode(";", $nombres);
												$preguntas = explode(";", $pregunta);
												$respuestas = explode(";", $respuesta);
												
												
															
												?>
												
											
												<span name="texto" style="color:black; font-size:30px;"><?php echo $nombres." ".$apellidos ?><br></span>
												<!--<div id="detalles"  style="display:none"></div>-->
												
												
												
												 
												
											
												<?php
												
												
													
													$i=0;
													$x=0;
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
													  
													 
													  // echo "Pregunta: $preguntas[$i] Respuesta: $respuestas[$i] <br>";
															

														 $i++;
														
													 
													}
													?>
														
													<?php
													
												
													 if($regla==1){
														$diagnostico= '<span style="color:green; font-size:25px;">'."Diagnóstico: No se detecta ansiedad".'</span>';
													 }elseif($regla==2){
														$diagnostico='<span style="color:yellow; font-size:25px;">'."Diagnóstico: Ansiedad leve".'</span>';
													 }else{
														$diagnostico='<span style="color:red; font-size:25px;">'."Diagnóstico: Ansiedad moderada/Grave".'</span>';
													 }
													 echo $diagnostico."<br>";
													 if($comentario==null){
														echo "Observaciones: Ninguna";
													 }else{
														echo "Observaciones: ".$comentario;
													 }
													 


													?>

													
													<!--Código JavaScript para carga de datos sin recargar pagina-->
													
									
													

												
												<!--<input type="button" value="Ver más" onclick="recargar()"/>
														<a onclick="vermas()" href="#">Ver Detalles</a>-->

												
													
													 <?php
						
											
											 echo "<br><br>"; 
											   //}	
													
											}    
											
										                                       
									
									}
									
											
												
												
                                          	
									


                            ?>
							
							<button style="margin: 10px" onclick="location.href='principalpsicologo.php'">Atrás</button>
							<script type="text/javascript">
													//Función recargar que cambia lo que hay en id="caja" por el contenido nuevo.
													function recargar(){
														document.getElementById("pregunta").innerHTML = $('#pregunta').hidde();
														
													}
																									
													function vermas() {
													var eldiv =document.getElementById("detalles");
													eldiv.style.display="block";
													
													}
													
							</script>
										 	
                                                
    </div>
</div>
<?php } ?>

</html>