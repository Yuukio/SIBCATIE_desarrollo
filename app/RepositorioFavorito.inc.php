<?php

include_once 'Conexion.inc.php';
include_once 'Favorito.inc.php';

class RepositorioFavorito {

    public static function insertarFavorito($conexion, $favorito) {

        $favorito_insertado = false;

        if (isset($conexion)) {
            try {
                $sql = "INSERT INTO favorito(planta_idplanta, usuario_idusuario) VALUES(:planta_idplanta, :usuario_idusuario)";

                $sentencia = $conexion->prepare($sql);
                
                $planta_idplanta= $favorito -> getPlantaIdPlanta();
                $usuario_idusuario= $favorito-> getUsuarioIdUsuario();

                $sentencia -> bindParam(':Planta_idPlanta', $planta_idplanta, PDO::PARAM_STR);
                $sentencia -> bindParam(':Usuario_idUsuario', $usuario_idusuario, PDO::PARAM_STR);

                $favorito_insertado = $sentencia -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $favorito_insertado;
        }
    }
}