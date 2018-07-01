<!DOCTYPE html>
<html>

    <?php
    $titulo = 'Administración';
    include_once '../plantillas/head-dashboard.php';
    ?>
    
    <body class="theme-red">

        <?php
        $administrador = "active";
        //------ Cargar Pantalla ------
        include_once '../plantillas/cargar-pantalla.php';
        //------ FINAL Cargar Pantalla ------
        //------ Barra superior ------
        include_once '../plantillas/barra-superior.php';
        // ------ FINAL - Barra ruperior ------
        // ------ Menu lateral ------
        include_once '../plantillas/menu-lateral.php';
        // ------ Final - Menu lateral ------
        ?>