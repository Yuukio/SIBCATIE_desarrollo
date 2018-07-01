<?php

class DeterminadaPor {

    private $idDeterminadaPor;
    private $nombre_determinada;
    private $fecha_determinada;

    public function __construct($idDeterminadaPor, $nombre_determinada, $fecha_determinada) {
        $this->idDeterminadaPor = $idDeterminadaPor;
        $this->nombre_determinada = $nombre_determinada;
        $this->fecha_determinada = $fecha_determinada;
    }

    public function getIdDeterminadaPor() {
        return $this->idDeterminadaPor;
    }

    public function getNombreDeterminada() {
        return $this->nombre_determinada;
    }

    public function getFechaDeterminada() {
        return $this->fecha_determinada;
    }

    public function setNombreDeterminada($nombre_determinada) {
        $this->nombre_determinada = $nombre_determinada;
    }

}
