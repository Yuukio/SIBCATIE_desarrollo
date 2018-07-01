<?php

include_once 'Conexion.inc.php';
include_once 'Continente.inc.php';

class RepositorioContinente {

    public static function insertarContinente($conexion, $continente) {

        $continente_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO continente(nombre_continente) VALUES(:nombre_continente)";

                $sentencia = $conexion->prepare($sql);

                $nombre_continente = $continente->getNombreContinente();

                $sentencia->bindParam(':nombre_continente', $nombre_continente, PDO::PARAM_STR);

                $continente_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $continente_insertado;
        }
    }

}