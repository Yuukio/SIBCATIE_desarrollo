<?php

include_once 'Conexion.inc.php';
include_once 'Uso.inc.php';

class RepositorioUso {

    public static function insertarUso($conexion, $uso) {

        $uso_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO uso(nombre_uso) VALUES(:nombre_uso)";

                $sentencia = $conexion->prepare($sql);

                $nombre_uso = $uso->getNombreUso();

                $sentencia->bindParam(':nombre_uso', $nombre_uso, PDO::PARAM_STR);

                $uso_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $uso_insertado;
        }
    }

}
