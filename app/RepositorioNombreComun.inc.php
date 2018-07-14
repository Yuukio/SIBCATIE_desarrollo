<?php

include_once 'Conexion.inc.php';
include_once 'NombreComun.inc.php';

class RepositorioNombreComun {

    public static function insertarNombreComun($conexion, $nombre_comun) {

        $nombre_comun_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO nombrecomun(nombre_nombre_comun, lengua, planta_idplanta) VALUES(:nombre_nombre_comun, :lengua, :planta_idplanta)";

                $sentencia = $conexion->prepare($sql);
                
                $nombre_nombre_comun = $nombre_comun-> getNombreComun();
                $lengua = $nombre_comun-> getLengua();
                $planta_idplanta = $nombre_comun-> getPlantaIdPlanta();                

                $sentencia -> bindParam(':nombre_nombre_comun', $nombre_nombre_comun);
                $sentencia -> bindParam(':lengua', $lengua);
                $sentencia -> bindParam(':Planta_idPlanta', $planta_idplanta);

                $nombre_comun_insertado = $sentencia -> execute();
                
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $nombre_comun_insertado;
        }
    }
}
