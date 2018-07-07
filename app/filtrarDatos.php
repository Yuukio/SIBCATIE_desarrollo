<?php

include ('conexion2.php');

$funcion = $_POST['funcion'];

// ********INSERTAR REINO
if ($funcion == 'filtrarReino') {
    $id_reino = $_POST["id_reino"];
    try {
        $query = "SELECT planta.idPlanta, planta.revision, usuario.nombre_usuario, historial.fecha_historial, historial.accion, planta.fecha_ingreso
				FROM historial
               	INNER JOIN planta ON historial.Planta_idPlanta=planta.idPlanta
                INNER JOIN usuario ON historial.Usuario_idUsuario=usuario.idUsuario
				ORDER BY historial.fecha_historial ASC";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($id_reino));

        $resutlado=$stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($resutlado);
        
    } catch (Exception $e) {
        echo '0';
    }
} 
