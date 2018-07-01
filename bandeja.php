<!DOCTYPE html>
<html>

    <?php
    $titulo = 'Bandeja';
    include_once 'plantillas/head-dashboard.php';
    ?>

    <body class="theme-red">

        <?php
        $bandeja = "active";
        //------ Cargar Pantalla ------
        include_once 'plantillas/cargar-pantalla.php';
        //------ FINAL Cargar Pantalla ------
        //------ Barra superior ------
        include_once 'plantillas/barra-superior.php';
        // ------ FINAL - Barra ruperior ------
        // ------ Menu lateral ------
        include_once 'plantillas/menu-lateral.php';
        // ------ Final - Menu lateral ------
        ?>

        <!-- Centro del Contenido-->
        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>Bandeja de Entrada</h2>
                </div>
            </div>
        </section>
        <!-- #FINAL# Centro del Contenido-->

        <?php
        include_once 'plantillas/dashboard-scripts.php';
        ?>