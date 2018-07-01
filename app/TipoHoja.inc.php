<?php

class TipoHoja {

    private $idTipoHoja;
    private $nombre_hoja;
    private $forma;

    public function __construct($idTipoHoja, $nombre_hoja, $forma) {
        $this->idTipoHoja = $idTipoHoja;
        $this->nombre_hoja = $nombre_hoja;
        $this->forma = $forma;
    }

    public function getIdHoja() {
        return $this->idTipoHoja;
    }

    public function getNombreTipoHoja() {
        return $this->nombre_hoja;
    }

    function getForma() {
        return $this->forma;
    }

    public function setNombreHoja($nombre_hoja) {
        $this->nombre_hoja = $nombre_hoja;
    }

    function setForma($forma) {
        $this->forma = $forma;
    }

}
