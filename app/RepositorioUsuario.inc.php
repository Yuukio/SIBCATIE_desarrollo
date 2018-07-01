<?php

include_once 'Conexion.inc.php';
include_once 'Usuario.inc.php';

class RepositorioUsuario {
    
    public static function obtenerNumeroUsuarios($conexion) {

        $total_usuarios = null;

        if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(*) as total FROM usuario";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                $total_usuarios = $resultado['total'];
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }
        }
        return $total_usuarios;
    }

    public static function insertarUsuario($conexion, $usuario) {

        $usuario_insertado = false;

        if (isset($conexion)) {
            try {

                $sql = "INSERT INTO `bd_sibcatie`.`usuario` (`idUsuario`, `nombre`, `apellido`, `email`, `nombre_usuario`, `password`, `fecha_registro`, `activo`, "
                        . "`telefono`, `rol_idrol`, `seccion_idseccion`) VALUES ('', :nombre, :apellido, :email, :nombre_usuario, :password, NOW(), "
                        . ":activo, :telefono, :rol_idrol, :seccion_idseccion)";

                $sentencia = $conexion->prepare($sql);

                $nombre = $usuario ->getNombre();
                $apellido = $usuario -> getApellido();
                $email = $usuario -> getEmail();
                $nombre_usuario = $usuario -> getNombre_usuario();
                $password = $usuario -> getPassword();
                $activo = $usuario -> getActivo();
                $seccion_idseccion = $usuario -> getSeccion();
                $rol_idrol = $usuario -> getRol();
                $telefono = $usuario -> getTelefono();
                
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia->bindParam(':nombre_usuario', $nombre_usuario, PDO::PARAM_STR);
                $sentencia->bindParam(':password', $password, PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);
                $sentencia->bindParam(':rol_idrol', $rol_idrol, PDO::PARAM_STR);
                $sentencia->bindParam(':seccion_idseccion', $seccion_idseccion, PDO::PARAM_STR);
                $sentencia->bindParam(':activo', $activo, PDO::PARAM_STR);


                $usuario_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex->getMessage();
            }

            return $usuario_insertado;
        }
    }

}
