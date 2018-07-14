<?php

include_once 'Conexion.inc.php';
include_once 'Forma.inc.php';

class RepositorioForma {

    public static function insertarForma($conexion, $forma) {

        $forma_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO forma(nombre_forma, caracteristicas) VALUES(:nombre_forma, :caracteristicas)";

                $sentencia = $conexion->prepare($sql);

                $nombre_forma = $forma->getNombreForma();
                $caracteristicas = $forma->getCaracteristicas();

                $sentencia->bindParam(':nombre_forma', $nombre_forma, PDO::PARAM_STR);
                $sentencia->bindParam(':caracteristicas', $caracteristicas, PDO::PARAM_STR);

                $forma_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $forma_insertado;
        }
    }

}