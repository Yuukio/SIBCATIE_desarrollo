<?php

include_once 'Conexion.inc.php';
include_once 'TipoHoja.inc.php';

class RepositorioTipoHoja {

    public static function insertarTipoHoja($conexion, $hoja) {

        $hoja_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO tipohoja(nombre_hoja, forma) VALUES(:nombre_genero, :forma)";

                $sentencia = $conexion->prepare($sql);

                $nombre_genero = $hoja->getNombreTipoHoja();
                $forma = $hoja->getForma();

                $sentencia->bindParam(':nombre_genero', $nombre_genero, PDO::PARAM_STR);
                $sentencia->bindParam(':forma', $forma, PDO::PARAM_STR);

                $hoja_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $hoja_insertado;
        }
    }

}
