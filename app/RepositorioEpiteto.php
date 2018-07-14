<?php

include_once 'Conexion.inc.php';
include_once 'Epiteto.inc.php';

class RepositorioEpiteto {

    public static function insertarEpiteto($conexion, $epiteto) {

        $epiteto_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO epiteto(nombre_epiteto, referencia) VALUES(:nombre_epiteto, :referencia)";

                $sentencia = $conexion->prepare($sql);

                $nombre_epiteto = $epiteto->getNombreEpiteto();
                $referencia = $epiteto->getReferencia();

                $sentencia->bindParam(':nombre_epiteto', $nombre_epiteto, PDO::PARAM_STR);
                $sentencia->bindParam(':referencia', $referencia, PDO::PARAM_STR);

                $epiteto_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $epiteto_insertado;
        }
    }

}
