<?php

include_once 'Conexion.inc.php';
include_once 'Rol.inc.php';

class RepositorioRol {

    public static function insertarRol($conexion, $rol) {

        $rol_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO rol(nombre_rol, seccion_idseccion) VALUES(:nombre_rol, :seccion_idseccion)";

                $sentencia = $conexion->prepare($sql);

                $nombre_rol = $rol->getNombre_rol();
                $nombre_rol = $rol->getSeccion_idseccion();

                $sentencia->bindParam(':nombre_rol', $nombre_rol, PDO::PARAM_STR);
                $sentencia->bindParam(':seccion_idseccion', $sentencia, PDO::PARAM_STR);

                $rol_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $rol_insertado;
        }
    }

}