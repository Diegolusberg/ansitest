<?php
function datosUsuario(){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=ansitest', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
    
    $statement = $conexion->prepare('SELECT id_usuario FROM usuarios WHERE usuario =:sesion');
    $statement->execute(array(':sesion'=> $_SESSION['usuario']));
    $resultado = $statement->fetch();
    return $resultado;
}

function datosUsuarioTotal(){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=ansitest', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
    
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario =:sesion');
    $statement->execute(array(':sesion'=> $_SESSION['usuario']));
    $resultado = $statement->fetch();
    //var_dump($resultado);
    return $resultado;
   
}
function traerempresas(){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=ansitest', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
    
    $statement = $conexion->prepare('SELECT * FROM empresas order by nombre');
    $statement->execute();
    $resultado= $statement->fetchAll();
    return $resultado;
}
?>