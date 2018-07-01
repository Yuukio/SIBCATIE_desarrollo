<?php

class Planta {

    private $idplanta;
    private $idmascara;
    private $genero_idgenero;
    private $epiteto_idepiteto;
    private $autor;
    private $fecha_ingreso;
    private $fuente_informacion;
    private $altura;
    private $forma_idforma;
    private $color_idcolor;
    private $tipohoja_idtipohoja;
    private $continente_idcontinente;
    private $zonacardinal_idzonacardinal;
    private $familia_idfamilia;
    private $determinadapor_iddeterminadapor;
    private $reproduccion;
    private $identificada;
    private $visible;
    private $revision;
    private $excel;

    public function __construct($idmascara, $familia_idfamilia, $genero_idgenero, $epiteto_idepiteto, $autor, $fecha_ingreso, $fuente_informacion, $altura, $forma_idforma, $color_idcolor, $tipohoja_idtipohoja, $determinadapor_iddeterminadapor, $reproduccion, $visible, $revision, $excel) {
        $this->idmascara = $idmascara;
        $this->genero_idgenero = $genero_idgenero;
        $this->epiteto_idepiteto = $epiteto_idepiteto;
        $this->autor = $autor;
        $this->fecha_ingreso = $fecha_ingreso;
        $this->fuente_informacion = $fuente_informacion;
        $this->altura = $altura;
        $this->forma_idforma = $forma_idforma;
        $this->color_idcolor = $color_idcolor;
        $this->tipohoja_idtipohoja = $tipohoja_idtipohoja;
        $this->familia_idfamilia = $familia_idfamilia;
        $this->determinadapor_iddeterminadapor = $determinadapor_iddeterminadapor;
        $this->reproduccion = $reproduccion;
        $this->visible = $visible;
        $this->revision = $revision;
        $this->revision = $excel;
    }

    public function getIdplanta() {
        return $this->idplanta;
    }

    public function getIdmascara() {
        return $this->idmascara;
    }

    public function getGenero_idgenero() {
        return $this->genero_idgenero;
    }

    public function getEpiteto_idepiteto() {
        return $this->epiteto_idepiteto;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getFecha_ingreso() {
        return $this->fecha_ingreso;
    }

    public function getFuente_informacion() {
        return $this->fuente_informacion;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getForma_idforma() {
        return $this->forma_idforma;
    }

    public function getColor_idcolor() {
        return $this->color_idcolor;
    }

    public function getTipohoja_idtipohoja() {
        return $this->tipohoja_idtipohoja;
    }

    public function getContinente_idcontinente() {
        return $this->continente_idcontinente;
    }

    public function getZonacardinal_idzonacardinal() {
        return $this->zonacardinal_idzonacardinal;
    }

    public function getFamilia_idfamilia() {
        return $this->familia_idfamilia;
    }

    public function getDeterminadapor_iddeterminadapor() {
        return $this->determinadapor_iddeterminadapor;
    }

    public function getReproduccion() {
        return $this->reproduccion;
    }

    public function getIdentificada() {
        return $this->identificada;
    }

    public function getVisible() {
        return $this->visible;
    }

    public function getRevision() {
        return $this->revision;
    }
    
    public function getExcel() {
        return $this->excel;
    }

    public function setExcel($excel) {
        $this->excel = $excel;
    }
    
    public function setGenero_idgenero($genero_idgenero) {
        $this->genero_idgenero = $genero_idgenero;
    }

    public function setEpiteto_idepiteto($epiteto_idepiteto) {
        $this->epiteto_idepiteto = $epiteto_idepiteto;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setFuente_informacion($fuente_informacion) {
        $this->fuente_informacion = $fuente_informacion;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setForma_idforma($forma_idforma) {
        $this->forma_idforma = $forma_idforma;
    }

    public function setColor_idcolor($color_idcolor) {
        $this->color_idcolor = $color_idcolor;
    }

    public function setTipohoja_idtipohoja($tipohoja_idtipohoja) {
        $this->tipohoja_idtipohoja = $tipohoja_idtipohoja;
    }

    public function setContinente_idcontinente($continente_idcontinente) {
        $this->continente_idcontinente = $continente_idcontinente;
    }

    public function setZonacardinal_idzonacardinal($zonacardinal_idzonacardinal) {
        $this->zonacardinal_idzonacardinal = $zonacardinal_idzonacardinal;
    }

    public function setFamilia_idfamilia($familia_idfamilia) {
        $this->familia_idfamilia = $familia_idfamilia;
    }

    public function setDeterminadapor_iddeterminadapor($determinadapor_iddeterminadapor) {
        $this->determinadapor_iddeterminadapor = $determinadapor_iddeterminadapor;
    }

    public function setReproduccion($reproduccion) {
        $this->reproduccion = $reproduccion;
    }

    public function setIdentificada($identificada) {
        $this->identificada = $identificada;
    }

    public function setVisible($visible) {
        $this->visible = $visible;
    }

    public function setRevision($revision) {
        $this->revision = $revision;
    }

}
