<link rel="stylesheet" href="css/test.css">


<h1>Ansitest</h1>

<?php if($post==0){?>
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
    <div class="pregunta" name="pregunta3">3. MIEDOS: ¿ Sientes muiedo a la oscuridad,a los desconocidos,a quedarse solo, a los animales. a, la circulación o a la muchedumbre cuando te encuentras en un entorno de trabajo?<br />
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
    <div class="pregunta" name="pregunta4">4. INSOMNIO: ¿ Sientes Dificultades de conciliación, Sueño interrumpido, Sueño no satisfactorio con cansancio al despertar,Sueños penosos, Pesadillas o Terrores nocturnos a menudo?<br />
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
    <div class="pregunta" name="pregunta5">5. FUNCIONES INTELECTUALES (COGNITIVAS): ¿Tienes Dificultad de concentración cuando realizas tareas o Mala memoria para recordar asuntos importantes?<br />
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
    <div class="pregunta" name="pregunta6">6. HUMOR DEPRESIVO: ¿Tienes Pérdida de interés por el trabajo, No disfrutas del tiempo libre, Depresión, Insomnio de madrugada o Variaciones anímicas a lo largo del día?<br />
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
    <div class="pregunta" name="pregunta7">7. SÍNTOMAS SOMÁTICOS MUSCULARES: ¿Sientes Dolores musculares, Rigidez o sacudidas musculares, Sacudidas clónicas, Rechinar de dientes o Voz quebrada?<br />
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
    <div class="pregunta" name="pregunta8">8. . SINTOMAS SOMÁTICOS GENERALES: ¿Tienes Zumbido de oídos. Visión borrosa. Oleadas de calor o frio. Sensación de debilidad. Parestesia (pinchazos u hormigueos)?<br />
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
    <div class="pregunta" name="pregunta9">9. SINTOMAS CARDIOVASCULARES:¿Tienes Taquicardia. Palpitaciones. Dolor torácico, Sensación pulsátil en vasos, Sensaciones de baja presión o desmayos. Extrasístoles (arritmias cardiacas benignas)?<br />
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
    <div class="pregunta" name="pregunta10">10. SINTOMAS RESPIRATORIOS:¿Sientes Opresión pretorácica. Constricción precordial. Sensación de ahogo falta de aire. Suspiros. Disnea (dificultad para respirar) cuando te dan responsabilidades?.<br />
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
    <div class="pregunta" name="pregunta11">11. SINTOMAS GASTROINTESTINALES:¿Tienes Dificultades evacuatorias,Gases, dolores o ardor antes o después de comer, hinchazón abdominal, náuseas, vómitos, Cólicos(espasmos) abdominales, diarrea. pérdida de peso. Estreñimiento constantemente?<br />
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
    <div class="pregunta" name="pregunta12">12. SÍNTOMAS GENITOURINARIOS: ¿Tienes micciones frecuentes, micción imperiosa, amenorrea (falta del periodo menstrual) de manera habitual?<br />
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
  <h2><?php echo "Su puntaje es de ".$suma." , se detecta posible ". $reglas[0]["resultado"]."<br>";?></h2>
                    <div>
                    <?php
										echo '<span style="color:green; font-size:25px;">'."Puntuacion menor a 6, no se detectan niveles de ansiedad.<br>".'</span>';
													
										echo '<span style="color:#FFE400; font-size:25px;">'."Puntuacion de 6 a 15, se detecta ansiedad leve.<br>".'</span>';
													
										echo '<span style="color:red; font-size:25px;">'."Puntuacion mayor a 15, se detecta una ansiedad moderada/grave, se recomienda consulta Psicologica.<br>".'</span>';
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