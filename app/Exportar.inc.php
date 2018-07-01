<?php

class Exportar {

    private $Planta_idPlanta;
    private $Usuario_idUsuario;

    public function __construct($Planta_idPlanta, $Usuario_idUsuario) {
        $this->Planta_idPlanta = $Planta_idPlanta;
        $this->Usuario_idUsuario = $Usuario_idUsuario;
    }

    public function getPlantaIdPlanta() {
        return $this->Planta_idPlanta;
    }

    public function getUsuarioIdUsuario() {
        return $this->Usuario_idUsuario;
    }



}
