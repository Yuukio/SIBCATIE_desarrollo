<?php

class Epiteto {

    private $idEpiteto;
    private $nombre_epiteto;
    private $referencia;

    public function __construct($idEpiteto, $nombre_epiteto, $referencia) {
        $this->idEpiteto = $idEpiteto;
        $this->nombre_epiteto = $nombre_epiteto;
        $this->referencia = $referencia;
    }

    public function getIdEpiteto() {
        return $this->idEpiteto;
    }

    public function getNombreEpiteto() {
        return $this->nombre_epiteto;
    }
    
    public function getReferencia(){
        return $this->referencia;
    }

    public function setNombreEpiteto($nombre_epiteto) {
        $this->nombre_epiteto = $nombre_epiteto;
    }

    public function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

}
