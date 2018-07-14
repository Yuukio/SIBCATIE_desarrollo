<?php

class EstadoSaludo{
    
    private $idEstadoSaludo;
    private $nombre_estado;
    
    function __construct($idEstadoSaludo, $nombre_estado) {
        $this->idEstadoSaludo = $idEstadoSaludo;
        $this->nombre_estado = $nombre_estado;
    }

    function getIdEstadoSaludo() {
        return $this->idEstadoSaludo;
    }

    function getNombreEstado() {
        return $this->nombre_estado;
    }

    function setNombre_estado($nombre_estado) {
        $this->nombre_estado = $nombre_estado;
    }
}