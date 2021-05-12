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

function traerReglas(String $var){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=ansitest', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
    
    $statement = $conexion->prepare('SELECT * FROM reglas where condicion=:condicion');
    $statement->execute(array(":condicion"=> $var));
    $resultado= $statement->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function traerDiagnostico(int $id_usuario){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=ansitest', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
    
    $statement = $conexion->prepare('SELECT * FROM diagnostico WHERE id_usuario = :id_usuario');
    $statement->execute(array(":id_usuario" => $id_usuario));
    $resultado = $statement->fetchAll();
    return $resultado;
}
?>