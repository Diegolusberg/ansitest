<html>
<head>
<a class="centrarSesion" href="cerrar.php">Cerrar Sesion</a>
<a id="logo-header" href="#">
			<span class="site-name"><?php
 
 echo "Bienvenido ".$_SESSION['usuario']
  ?></span>
</a> 
<a id="logoansitest" href="#">
			<span class="site-name">ANSITEST</span>
</a>
</head>


<LINK REL=StyleSheet HREF="css/principalpsicologo.css" TYPE="text/css" MEDIA=screen>
<div class="btn-group" style="margin: 5%">
  <button style="margin: 10px" onclick="location.href='registrarempresa.php'">Registrar Empresa</button>
  <button style="margin: 10px" onclick="location.href='informes.php'">Informes de empresa</button>
  <button style="margin: 10px" onclick="location.href='informepersonal.php'">Agregar Comentarios</button>
</div>

</html>