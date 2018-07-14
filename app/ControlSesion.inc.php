<?php

class ControlSesion {

    public static function iniciarSesion($id_usuario, $nombre_usuario) {

        if (session_id() == '') {
            session_start();
        }

        $_SESSION['idUsuario'] = $id_usuario;
        $_SESSION['nombre_usuario'] = $nombre_usuario;
    }

    public static function cerrarSesion() {

        if (session_id() == '') {
            session_start();
        }

        if (isset($_SESSION['idUsuario'])) {
            unset($_SESSION['idUsuario']);
        }

        if (isset($_SESSION['nombre_usuario'])) {
            unset($_SESSION['nombre_usuario']);
        }

        session_destroy();
    }

    public static function sesionIniciada() {

        if (session_id() == '') {
            session_start();
        }

        if (isset($_SESSION['idUsuario']) && isset($_SESSION['nombre_usuario'])) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
