<?php

include_once 'Conexion.inc.php';
include_once 'Exportar.inc.php';

class RepositorioExportar {

    public static function insertarExportar($conexion, $exportar) {

        $exportar_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO exportar(planta_idplanta, usuario_idusuario) VALUES(:planta_idplanta, :usuario_idusuario)";

                $sentencia = $conexion->prepare($sql);
                
                $planta_idplanta= $exportar -> getPlantaIdPlanta();
                $usuario_idusuario= $exportar-> getUsuarioIdUsuario();

                $sentencia -> bindParam(':Planta_idPlanta', $planta_idplanta, PDO::PARAM_STR);
                $sentencia -> bindParam(':Usuario_idUsuario', $usuario_idusuario, PDO::PARAM_STR);

                $exportar_insertado = $sentencia -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $exportar_insertado;
        }
    }
}