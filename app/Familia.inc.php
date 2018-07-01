<?php

class Familia {

    private $idFamilia;
    private $nombre_familia;

    public function __construct($idFamilia, $nombre_familia) {
        $this->idFamilia = $idFamilia;
        $this->nombre_familia = $nombre_familia;
    }

    public function getIdFamilia() {
        return $this->idFamilia;
    }

    public function getNombreFamilia() {
        return $this->nombre_familia;
    }

    public function setNombre_familia($nombre_familia) {
        $this->nombre_familia = $nombre_familia;
    }

}
