<?php

class Planta_has_Uso {

    private $planta_idplanta;
    private $uso_iduso;

    public function __construct($planta_idplanta, $uso_iduso) {
        $this->planta_idplanta = $planta_idplanta;
        $this->uso_iduso = $uso_iduso;
    }

    public function getPlantaidPlanta() {
        return $this->planta_idplanta;
    }

    public function getUsoIdUso() {
        return $this->uso_iduso;
    }

}
