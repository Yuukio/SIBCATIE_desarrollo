<?php

class ZonaCardinal {

    private $idZonaCardinal;
    private $nombre_cardinal;

    public function __construct($idZonaCardinal, $nombre_cardinal) {
        $this->idZonaCardinal = $idZonaCardinal;
        $this->nombre_cardinal = $nombre_cardinal;
    }

    public function getIdZonaCardinal() {
        return $this->idZonaCardinal;
    }

    public function getNombreZonaCardinal() {
        return $this->nombre_cardinal;
    }

    public function setIdZonaCardinal($nombre_cardinal) {
        $this->nombre_cardinal = $nombre_cardinal;
    }
}
