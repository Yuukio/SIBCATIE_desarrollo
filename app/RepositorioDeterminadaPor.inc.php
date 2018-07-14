<?php

include_once 'Conexion.inc.php';
include_once 'DeterminadaPor.inc.php';

class RepositorioDeterminadaPor {

    public static function insertarDeterminadaPor($conexion, $determinada_por) {

        $determinada_insertada = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO determinadapor(nombre_determinado, fecha_determinado) VALUES(:nombre_determinado, NOW())";

                $sentencia = $conexion->prepare($sql);

                $nombre_determinada = $determinada_por->getNombreDeterminada();

                $sentencia->bindParam(':nombre_determinado', $nombre_determinada, PDO::PARAM_STR);

                $determinada_insertada = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $determinada_insertada;
        }
    }

}
