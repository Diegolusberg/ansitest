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

<form action="#" target="" method="get" name="formDatosEmpresas">
    
		<label for="id_empresa">Empresa</label>
		<select name="empresa">
        <?php
        foreach ($resultado as $empresas) {
          echo '<option value='.$empresas['id_empresa'].'>'. $empresas['nombre']; }'</option>'
        ?>
		</select>

		<label for="codigo">Codigo</label>
		<input type ="text" name="codigo" id="codigo" placeholder="Codigo de acceso"/>

	
	<input type="submit" name="informe" value="informe"/>
</form>

</body>
</html>