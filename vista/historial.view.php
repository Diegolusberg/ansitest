<html>
<link rel="stylesheet" href="css/historial.css">
<h1><?php echo $_SESSION['usuario'] ?></h1>


<h2>Historial de test</h2>
<div class="historial">
    <div class="pregunta"> <?php    
                                    if($resultado==null){
                                      echo "<h1>Aún no ha realizado el test</h1>";
                                    }else{

                                              foreach($resultado as $valores){

                                                list(,,$pregunta, $respuesta,$regla,$fecha) = $valores;//Trae valores y guarda en forma de string para hacer el explode
                                                                    //hacemos asi porque fetchAll trae arrays de array y resulta complicado manipular
                                                                                       
                                              $preguntas = explode(";", $pregunta);	
                                              $respuestas = explode(";", $respuesta);
                                      //var_dump($preguntas);
                                                           
                                                            echo '<span style="color:black; font-size:25px;">'.$fecha.'</span><br>';
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
                                                              echo '<span style="color:black; font-size:15px;">Pregunta:'. $preguntas[$i].' Respuesta:'. $respuestas[$i].' <br></span>';
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
                                                     }
                                    }    

                            ?>
                                                    

 

 
    </div>
</div>
  </html>