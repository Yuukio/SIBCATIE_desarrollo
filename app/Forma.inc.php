<?php

class Forma {

    private $idForma;
    private $nombre_forma;
    private $caracteristicas;

    public function __construct($idForma, $nombre_forma, $caracteristicas) {
        $this->idForma = $idForma;
        $this->nombre_forma = $nombre_forma;
        $this->caracteristicas = $caracteristicas;
    }

    public function getIdForma() {
        return $this->idForma;
    }

    public function getNombreForma() {
        return $this->nombre_forma;
    }

    public function getCaracteristicas() {
        return $this->caracteristicas;
    }

    public function setNombreForma($nombre_forma) {
        $this->nombre_forma = $nombre_forma;
    }

    public function setCaracteristicas($caracteristicas) {
        $this->caracteristicas = $caracteristicas;
    }

}
