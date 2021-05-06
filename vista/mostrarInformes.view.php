<html>
<link rel="stylesheet" href="css/historial.css">
<h1><?php echo $_SESSION['usuario'] ?></h1>


<h2>Historial de Usuarios</h2>
<div class="historial">
    <div class="pregunta"> <?php    
                                    if($resultado==null){
                                      echo "<h1>Aún no ha realizado el test</h1>";
                                    }else{
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
                                          }


                            ?>
                                                    

 

 
    </div>
</div>
  </html>