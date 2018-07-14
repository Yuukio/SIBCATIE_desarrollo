<?php

include_once 'Conexion.inc.php';
include_once 'Genero.inc.php';

class RepositorioGenero {

    public static function insertarGenero($conexion, $genero) {

        $genero_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO genero(nombre_genero) VALUES(:nombre_genero)";

                $sentencia = $conexion->prepare($sql);
                
                $nombre_genero = $genero -> getNombreGenero();

                $sentencia -> bindParam(':nombre_genero', $nombre_genero, PDO::PARAM_STR);

                $genero_insertado = $sentencia -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $genero_insertado;
        }
    }
}
