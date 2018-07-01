<?php

include_once 'Conexion.inc.php';
include_once 'Seccion.inc.php';

class RepositorioSeccion {

    public static function insertarSeccion($conexion, $seccion) {

        $seccion_insertada = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO seccion(nombre_seccion) VALUES(:nombre_seccion)";

                $sentencia = $conexion->prepare($sql);

                $nombre_seccion = $seccion->getNombre_seccion();

                $sentencia->bindParam(':nombre_rol', $nombre_seccion, PDO::PARAM_STR);

                $seccion_insertada = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $seccion_insertada;
        }
    }

}