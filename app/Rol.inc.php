<?php

class Rol {

    private $idrol;
    private $nombre_rol;
    private $seccion_idseccion;

    public function __construct($idrol, $nombre_rol, $seccion_idseccion) {
        $this->idrol = $idrol;
        $this->nombre_rol = $nombre_rol;
        $this->seccion_idseccion = $seccion_idseccion;
    }

    public function getIdrol() {
        return $this->idrol;
    }

    public function getNombre_rol() {
        return $this->nombre_rol;
    }
    
    public function getSeccion_idseccion() {
        return $this->seccion_idseccion;
    }
    
    public function setNombre_rol($nombre_rol) {
        $this->nombre_rol = $nombre_rol;
    }

}