<?php

include_once 'Conexion.inc.php';
include_once 'EstadoSaludo.inc.php';

class RepositorioEstadoSalud {

    public static function insertarEstadoSalud($conexion, $estado_saludo) {

        $estado_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO estadosalud(nombre_estado) VALUES(:nombre_estado)";

                $sentencia = $conexion->prepare($sql);

                $nombre_estado = $estado_saludo->getNombreEstado();

                $sentencia->bindParam(':nombre_estado', $nombre_estado, PDO::PARAM_STR);

                $estado_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $estado_insertado;
        }
    }
    
    

}
