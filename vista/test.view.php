<link rel="stylesheet" href="css/test.css">


<h1>Ansitest</h1>


<?php if($post==0){?>
<h3>Tenga en cuenta para cada pregunta estos 3 aspectos: su gravedad, su frecuencia de presentación y la incapacidad o disfunción que produce.</h3>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="test">

<div class="pregresp">
    <div class="pregunta" name="pregunta1">1.<?php 

                                            traerPreguntas(0,$preguntasV);
                                             
                                             ?><br />
    </div>
        <div class="respuestas" name="resp" id="resp">
          <input type="radio" name="resp[1]" value="0" /> Ausente<br />
          <input type="radio" name="resp[1]" value="1" /> Intensidad Ligera <br />
          <input type="radio" name="resp[1]" value="2" /> Intensidad Media<br />
          <input type="radio" name="resp[1]" value="3" /> Intensidad Elevada<br />
          <input type="radio" name="resp[1]" value="4" /> Intensidad Máxima (Invalidante)<br />
        </div>
    </div>


  <div class="pregresp">
    <div class="pregunta" name="pregunta2">2.<?php

                                                 traerPreguntas(1,$preguntasV);

                                                ?><br />
    </div>
        <div class="respuestas"name="resp">
          <input type="radio" name="resp[2]" value="0" /> Ausente<br />
          <input type="radio" name="resp[2]" value="1" /> Intensidad Ligera <br />
          <input type="radio" name="resp[2]" value="2" /> Intensidad Media<br />
          <input type="radio" name="resp[2]" value="3" /> Intensidad Elevada<br />
          <input type="radio" name="resp[2]" value="4" /> Intensidad Máxima (Invalidante)<br />
        </div>
  </div>


  <div class="pregresp">
    <div class="pregunta" name="pregunta3">3. <?php

                                              traerPreguntas(2,$preguntasV);

                                              ?><br />
    </div>
        <div class="respuestas">
          <input type="radio" name="resp[3]" value="0" /> Ausente<br />
          <input type="radio" name="resp[3]" value="1" /> Intensidad Ligera <br />
          <input type="radio" name="resp[3]" value="2" /> Intensidad Media<br />
          <input type="radio" name="resp[3]" value="3" /> Intensidad Elevada<br />
          <input type="radio" name="resp[3]" value="4" /> Intensidad Máxima (Invalidante)<br />
          </div>
    </div>


    <div class="pregresp">
    <div class="pregunta" name="pregunta4">4. <?php

                                              traerPreguntas(3,$preguntasV);

                                              ?><br />
    </div>
        <div class="respuestas">
          <input type="radio" name="resp[4]" value="0" /> Ausente<br />
          <input type="radio" name="resp[4]" value="1" /> Intensidad Ligera <br />
          <input type="radio" name="resp[4]" value="2" /> Intensidad Media<br />
          <input type="radio" name="resp[4]" value="3" /> Intensidad Elevada<br />
          <input type="radio" name="resp[4]" value="4" /> Intensidad Máxima (Invalidante)<br />
          </div>
    </div>

    <div class="pregresp">
    <div class="pregunta" name="pregunta5">5. <?php

                                              traerPreguntas(4,$preguntasV);

                                              ?><br />
    </div>
        <div class="respuestas">
          <input type="radio" name="resp[5]" value="0" /> Ausente<br />
          <input type="radio" name="resp[5]" value="1" /> Intensidad Ligera <br />
          <input type="radio" name="resp[5]" value="2" /> Intensidad Media<br />
          <input type="radio" name="resp[5]" value="3" /> Intensidad Elevada<br />
          <input type="radio" name="resp[5]" value="4" /> Intensidad Máxima (Invalidante)<br />
          </div>
    </div>

    <div class="pregresp">
    <div class="pregunta" name="pregunta6">6. <?php

                                              traerPreguntas(5,$preguntasV);

                                              ?><br />
    </div>
        <div class="respuestas">
          <input type="radio" name="resp[6]" value="0" /> Ausente<br />
          <input type="radio" name="resp[6]" value="1" /> Intensidad Ligera <br />
          <input type="radio" name="resp[6]" value="2" /> Intensidad Media<br />
          <input type="radio" name="resp[6]" value="3" /> Intensidad Elevada<br />
          <input type="radio" name="resp[6]" value="4" /> Intensidad Máxima (Invalidante)<br />
          </div>
    </div>

    <div class="pregresp">
    <div class="pregunta" name="pregunta7">7. <?php

                                              traerPreguntas(6,$preguntasV);

                                              ?><br />
    </div>
        <div class="respuestas">
          <input type="radio" name="resp[7]" value="0" /> Ausente<br />
          <input type="radio" name="resp[7]" value="1" /> Intensidad Ligera <br />
          <input type="radio" name="resp[7]" value="2" /> Intensidad Media<br />
          <input type="radio" name="resp[7]" value="3" /> Intensidad Elevada<br />
          <input type="radio" name="resp[7]" value="4" /> Intensidad Máxima (Invalidante)<br />
          </div>
    </div>

    <div class="pregresp">
    <div class="pregunta" name="pregunta8">8. <?php

                                              traerPreguntas(7,$preguntasV);

                                              ?><br />
    </div>
        <div class="respuestas">
          <input type="radio" name="resp[8]" value="0" /> Ausente<br />
          <input type="radio" name="resp[8]" value="1" /> Intensidad Ligera <br />
          <input type="radio" name="resp[8]" value="2" /> Intensidad Media<br />
          <input type="radio" name="resp[8]" value="3" /> Intensidad Elevada<br />
          <input type="radio" name="resp[8]" value="4" /> Intensidad Máxima (Invalidante)<br />
          </div>
    </div>

    <div class="pregresp">
    <div class="pregunta" name="pregunta9">9. <?php

                                              traerPreguntas(8,$preguntasV);

                                              ?><br />
    </div>
        <div class="respuestas">
          <input type="radio" name="resp[9]" value="0" /> Ausente<br />
          <input type="radio" name="resp[9]" value="1" /> Intensidad Ligera <br />
          <input type="radio" name="resp[9]" value="2" /> Intensidad Media<br />
          <input type="radio" name="resp[9]" value="3" /> Intensidad Elevada<br />
          <input type="radio" name="resp[9]" value="4" /> Intensidad Máxima (Invalidante)<br />
          </div>
    </div>

    <div class="pregresp">
    <div class="pregunta" name="pregunta10">10. <?php

                                                traerPreguntas(9,$preguntasV);

                                                ?><br />
    </div>
        <div class="respuestas">
          <input type="radio" name="resp[10]" value="0" /> Ausente<br />
          <input type="radio" name="resp[10]" value="1" /> Intensidad Ligera <br />
          <input type="radio" name="resp[10]" value="2" /> Intensidad Media<br />
          <input type="radio" name="resp[10]" value="3" /> Intensidad Elevada<br />
          <input type="radio" name="resp[10]" value="4" /> Intensidad Máxima (Invalidante)<br />
          </div>
    </div>

    <div class="pregresp">
    <div class="pregunta" name="pregunta11">11. <?php

                                                traerPreguntas(10,$preguntasV);

                                                ?><br />
    </div>
        <div class="respuestas">
          <input type="radio" name="resp[11]" value="0" /> Ausente<br />
          <input type="radio" name="resp[11]" value="1" /> Intensidad Ligera <br />
          <input type="radio" name="resp[11]" value="2" /> Intensidad Media<br />
          <input type="radio" name="resp[11]" value="3" /> Intensidad Elevada<br />
          <input type="radio" name="resp[11]" value="4" /> Intensidad Máxima (Invalidante)<br />
          </div>
    </div>

    <div class="pregresp">
    <div class="pregunta" name="pregunta12">12. <?php

                                                traerPreguntas(11,$preguntasV);

                                                ?><br />
    </div>
        <div class="respuestas">
          <input type="radio" name="resp[12]" value="0" /> Ausente<br />
          <input type="radio" name="resp[12]" value="1" /> Intensidad Ligera <br />
          <input type="radio" name="resp[12]" value="2" /> Intensidad Media<br />
          <input type="radio" name="resp[12]" value="3" /> Intensidad Elevada<br />
          <input type="radio" name="resp[12]" value="4" /> Intensidad Máxima (Invalidante)<br />
          </div>
    </div>
  
          
    <input type="submit" name="enviar" value="Enviar"/>

          <?php if(!empty($errores)): ?>
              <div class="error">
                  <ul>
                  <script>alert("<?php echo $errores; ?>");</script>
                      
                  </ul>
              </div>
          <?php endif; ?>
         
          
</form>
<?php 

}else{ 
  
  ?>
<html>
<LINK REL=StyleSheet HREF="css/resultadostest.css" TYPE="text/css" MEDIA=screen>
<div class="btn-group" style="margin: 5%">
 <?php if($diagnostico!=null){
        
        $indice=0;
        //var_dump($diagnostico);
        foreach($diagnostico as $valores){

         list(,,$pregunta, $respuesta,) = $valores;//Trae valores y guarda en forma de string para hacer el explode,hacemos asi porque fetchAll trae arrays de array y resulta complicado manipular
            
          //$nombres= explode(";", $nombres);
          $preguntas = explode(";", $pregunta);
          $respuestas = explode(";", $respuesta);
  
        
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
              
             //}
             echo "<br>"; 
           }
           
        }                                   
 }

 ?> 
  <h2><?php echo "Diagnóstico probable: ". $reglas[0]["resultado"]."<br>";?></h2>
                    <div>
                    <?php
									//	echo '<span style="color:green; font-size:25px;">'."Puntuacion menor a 6, no se detectan niveles de ansiedad.<br>".'</span>';
													
									//	echo '<span style="color:#FFE400; font-size:25px;">'."Puntuacion de 6 a 15, se detecta ansiedad leve.<br>".'</span>';
													
									//	echo '<span style="color:red; font-size:25px;">'."Puntuacion mayor a 15, se detecta una ansiedad moderada/grave, se recomienda consulta Psicologica.<br>".'</span>';
										?>
                    </div>			 
  <button style="margin: 10px" onclick="location.href='test.php'">Volver al test</button>
  <button style="margin: 10px" onclick="location.href='principal.php'">Volver al menú principal</button>
</div>
</html>

<?php 
$post=0;
} 
  
  ?>