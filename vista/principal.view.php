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


<LINK REL=StyleSheet HREF="css/principal.css" TYPE="text/css" MEDIA=screen> ...
<div class="btn-group" style="margin: 5%">
  <button style="margin: 10px" onclick="location.href='editarusuario.php'">Editar Perfil</button>
  <button style="margin: 10px" onclick="location.href='historial.php'">Historial</button>
  <button style="margin: 10px" onclick="location.href='test.php'">Test</button>
  <button style="margin: 10px" onclick="location.href='https://es.wikipedia.org/wiki/Ansiedad'">Más sobre la ansiedad</button>
</div>

</html>

