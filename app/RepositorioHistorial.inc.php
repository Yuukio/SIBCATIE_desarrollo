<?php

include_once 'Conexion.inc.php';
include_once 'Historial.inc.php';

class RepositorioHistorial {

    public static function insertarHistorial($conexion, $historial) {

        $historial_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO historial(fecha_historial, accion, planta_idplanta, usuario_idusuario) VALUES(NOW(), :accion, :planta_idplanta, :usuario_idusuario)";

                $sentencia = $conexion->prepare($sql);
                
                $accion = $historial-> getAccion();
                $planta_idplanta = $historial-> getPlantaIdPlanta();
                $usuario_idusuario = $historial-> getUsuarioIdUsuario();                

                $sentencia -> bindParam(':accion', $accion, PDO::PARAM_STR);
                $sentencia -> bindParam(':Planta_idPlanta', $planta_idplanta, PDO::PARAM_STR);
                $sentencia -> bindParam(':Usuario_idUsuario', $usuario_idusuario, PDO::PARAM_STR);

                $historial_insertado = $sentencia -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $historial_insertado;
        }
    }
    
    public static function obtener_lista_historial($conexion){
        
        $historial = [];
        
        if (isset($conexion)){
            try {
                $sql = "SELECT * FROM Historial ORDER BY fecha_historial DESC";
                
                $sentencia = $conexion->prepare($sql);
                
                $sentencia -> execute();
                
                $resultado = $sentencia -> fetchAll();
                
                if(count($resultado)){
                    foreach ($resultado as $fila) {
                        $historial[] = new Historial($fila['fecha_historial'],
                                $fila['accion'], $fila['Planta_idPlanta'], $fila['Usuario_idUsuario']);
                    }
                }
                
            } catch (PDOException $ex) {
                print 'ERROR: '.$ex ->getMessage();
            }
        }
        return $historial;
    }
}
