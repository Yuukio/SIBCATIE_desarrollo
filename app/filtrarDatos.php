<?php

include ('conexion2.php');

$funcion = $_POST['funcion'];

// ********INSERTAR REINO
if ($funcion == 'filtrarReino') {
    $id_reino = $_POST["id_reino_"];
    try {
        $query = "INSERT INTO reino (nombre_reino) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_reino));
        echo '1';
        
    } catch (Exception $e) {
        echo '0';
    }
} 
