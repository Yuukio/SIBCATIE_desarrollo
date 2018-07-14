<?php

class Foto {

    private $idFoto;
    private $fecha;
    private $latitud;
    private $longitud;
    private $Planta_idPlanta;

    public function __construct($idFoto, $fecha, $latitud, $longitud, $Planta_idPlanta) {
        $this->idFoto = $idFoto;
        $this->fecha = $fecha;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->Planta_idPlanta = $Planta_idPlanta;
    }

    public function getIdFoto() {
        return $this->idFoto;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getLatitud() {
        return $this->latitud;
    }

    public function getLongitud() {
        return $this->longitud;
    }

    public function getPlanta_idPlanta() {
        return $this->Planta_idPlanta;
    }

}
