<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<html>
<head>
	<title>Informe Personal</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Un formulario sirve para enviar datos a otra página que los recoge para usarlos o almacenarlos."/>
	<?php if($datosusuarios==null){?>
	<h1>Seleccione la empresa</h1>
	<?php }else{?>
	<h1>Seleccione el paciente</h1>
	<?php }?>
</head>
<LINK REL=StyleSheet HREF="css/informepersonal.css" TYPE="text/css" MEDIA=screen>
<div class="formulario" >     
<body>

<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> target="" method="POST" name="formComentarios" id="form1">
    
		<?php if($datosusuarios==null AND $datos==null){?>		
		<label for="id_empresa">Empresa</label>
		<select name="empresa">
    
        <?php
        foreach ($datosempresas as $empresas) {
          echo '<option value='.$empresas['id_empresa'].'>'. $empresas['nombre']; }'</option>'
        ?>
		</select>
		<label for="codigo">Codigo</label>
		<input type ="password" name="codigo" id="codigo" placeholder="Codigo de acceso"/>


		<?php }else{?>
		
		
	 	   
    	<label for="usuario" >Usuario</label>
		<select name="usuario">
        <?php
        foreach ($datosusuarios as $usuarios) {
          echo '<option value='.$usuarios['id_usuario'].'>'. $usuarios['nombres']." ".$usuarios['apellidos']; }'</option>'
        ?>
		</select>
		
		
		<?php }?>
	
	
		<input type="submit" name="verficar" value="Verificar"/>
		
		
  

		<?php if(!empty($errores)): ?>
					<div class="error">
						<ul>
							<?php echo $errores; ?>
						</ul>
					</div>
		<?php endif; ?>

		
</form>


</body>
<button class="boton" name="btnmenu" onclick="location.href='principalpsicologo.php'">Menú</button>

<?php 
if($datosusuarios==null AND isset($_POST['empresa']) AND $errores==''){
	echo "<h1>No se encuentran pacientes</h1>";}

if($datos==null AND isset($_POST['usuario'])){
	echo "<h1>No se encuentran test</h1>";}
	
if(isset($_POST['usuario']) AND $datos!=null){
	
	if($datos!=null){
		
		foreach($datos as $valores){
		
			
			list($id_usuario, $nombres,$apellidos,$pregunta, $respuesta,$regla) = $valores;//Trae valores y guarda en forma de string para hacer el explode,hacemos asi porque fetchAll trae arrays de array y resulta complicado manipular
			
			//$nombres= explode(";", $nombres);
			$preguntas = explode(";", $pregunta);
			$respuestas = explode(";", $respuesta);
			
			
						
			?>
			
	
			<span name="texto" style="color:black; font-size:30px;">Último Diagnóstico<br></span>
			<span name="texto" style="color:black; font-size:30px;"><?php echo $nombres." ".$apellidos ?><br></span>
			
		
			<?php
			
			
				
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
				?>
					
				<?php
				
			
				 if($regla==1){
					$diagnostico= '<span style="color:green; font-size:25px;">'."Diagnóstico: No se detecta ansiedad".'</span>';
				 }elseif($regla==2){
					$diagnostico='<span style="color:yellow; font-size:25px;">'."Diagnóstico: Ansiedad leve".'</span>';
				 }else{
					$diagnostico='<span style="color:red; font-size:25px;">'."Diagnóstico: Ansiedad moderada/Grave".'</span>';
				 }echo $diagnostico;
				
				 

		
		 echo "<br><br>"; 
		   //}	
				
		}    
		
										   

	}
	?>	<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> target="" method="POST" name="formInsertarComentario" id="form2">
		<label for="comentario">Comentario</label>
		<textarea name="comentario" id="comentario" cols="20" rows="5"></textarea>
		<input type="submit" name="btncomentario" value="Enviar"/>
		</form>
 <?php

}	
	
	
?>

		
	
</div>
</html>