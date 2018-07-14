<?php

class Favorito {

    private $planta_idplanta;
    private $usuario_idusuario;

    public function __construct($planta_idplanta, $usuario_idusuario) {
        $this->planta_idplanta = $planta_idplanta;
        $this->usuario_idusuario = $usuario_idusuario;
    }

    public function getPlantaIdPlanta() {
        return $this->planta_idplanta;
    }

    public function getUsuarioIdUsuario() {
        return $this->usuario_idusuario;
    }

}
