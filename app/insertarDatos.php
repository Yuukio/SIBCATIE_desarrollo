<?php

include_once 'app/Conexion.inc.php';

$nombre_reino = $_POST['nombre-reino'];

$sql_reino = "INSERT INTO reino (nombre_reino) VALUES ('$nombre_reino')";

$conexion_reino = Conexion::obtener_conexion()->prepare($sql_reino);

echo $conexion_reino->execute();

/*$nombre_reino = $_POST['nombre-reino'];

if (isset(Conexion::obtener_conexion())) {
    
    try {
        
        $sql_reino = "INSERT INTO reino (nombre_reino) VALUES ('$nombre_reino')";
        
        $sentencia = Conexion::obtener_conexion()->prepare($sql_reino);
        
        $conexion_reino = $sentencia->execute();
        
    } catch (PDOException $exc) {
        print 'ERROR '.$exc->getMessage();
    }
    return $conexion_reino;
}*/

?>