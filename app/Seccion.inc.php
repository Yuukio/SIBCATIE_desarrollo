<?php

class Seccion {

    private $idseccion;
    private $nombre_seccion;
    
    public function __construct($idseccion, $nombre_seccion) {
        $this->idseccion = $idseccion;
        $this->nombre_seccion = $nombre_seccion;
    }

    public function getIdseccion() {
        return $this->idseccion;
    }

    public function getNombre_seccion() {
        return $this->nombre_seccion;
    }

    public function setNombre_seccion($nombre_seccion) {
        $this->nombre_seccion = $nombre_seccion;
    }

}