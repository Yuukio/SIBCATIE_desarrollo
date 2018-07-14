<?php

class Genero {

    private $idGenero;
    private $nombre_genero;

    public function __construct($idGenero, $nombre_genero) {
        $this->idGenero = $idGenero;
        $this->nombre_genero = $nombre_genero;
    }

    public function getIdGenero() {
        return $this->idGenero;
    }

    public function getNombreGenero() {
        return $this->nombre_genero;
    }

    public function setNombreGenero($nombre_genero) {
        $this->nombre_genero = $nombre_genero;
    }

}
