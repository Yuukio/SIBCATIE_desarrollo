<?php

include_once 'Conexion.inc.php';
include_once 'ZonaCardinal.inc.php';

class RepositorioZonaCardinal {

    public static function insertarZonaCardinal($conexion, $cardinal) {

        $cardinal_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO zonacardinal(nombre_cardinal) VALUES(:nombre_cardinal)";

                $sentencia = $conexion->prepare($sql);

                $nombre_cardinal = $cardinal->getNombreZonaCardinal();

                $sentencia->bindParam(':nombre_cardinal', $nombre_cardinal, PDO::PARAM_STR);

                $cardinal_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $cardinal_insertado;
        }
    }

}
