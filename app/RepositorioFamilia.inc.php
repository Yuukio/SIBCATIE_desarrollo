<?php

include_once 'Conexion.inc.php';
include_once 'Familia.inc.php';

class RepositorioFamilia {

    public static function insertarFamilia($conexion, $familia) {

        $familia_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO familia(nombre_familia) VALUES(:nombre_familia)";

                $sentencia = $conexion->prepare($sql);

                $nombre_familia = $familia->getNombreFamilia();

                $sentencia->bindParam(':nombre_familia', $nombre_familia, PDO::PARAM_STR);

                $familia_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $familia_insertado;
        }
    }

}