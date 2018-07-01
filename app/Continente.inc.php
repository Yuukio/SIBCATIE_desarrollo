<?php

class Continente {

    private $idContinente;
    private $nombre_Continente;

    public function __construct($idContinente, $nombre_Continente) {
        $this->idContinente = $idContinente;
        $this->nombre_Continente = $nombre_Continente;
    }

    public function getIdContinente() {
        return $this->idContinente;
    }

    public function getNombreContinente() {
        return $this->nombre_Continente;
    }

    public function setNombreContinente($nombre_Continente) {
        $this->nombre_Continente = $nombre_Continente;
    }

}
