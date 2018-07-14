<?php

include_once 'Conexion.inc.php';
include_once 'Colores.inc.php';

class RepositorioColor {

    public static function insertarColor($conexion, $color) {

        $color_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO color(nombre_color) VALUES(:nombre_color)";

                $sentencia = $conexion->prepare($sql);
                
                $nombre_color = $color->getNombreColor();

                $sentencia->bindParam(':nombre_color', $nombre_color, PDO::PARAM_STR);

                $color_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $color_insertado;
        }
    }

}
