<?php

class Colores {

    private $idColor;
    private $nombre_color;

    public function __construct($idColor, $nombre_color) {
        $this->idColor = $idColor;
        $this->nombre_color = $nombre_color;
    }

    public function getIdColor() {
        return $this->idColor;
    }

    public function getNombreColor() {
        return $this->nombre_color;
    }

    public function setNombreColor($nombre_color) {
        $this->nombre_color = $nombre_color;
    }

}
