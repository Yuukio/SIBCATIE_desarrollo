<!DOCTYPE html>
<html>

    <?php
    $titulo = 'Historial';
    include_once 'plantillas/head-dashboard.php';
    ?>

    <body class="theme-red">

        <?php
        $historial = "active";
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
                    <h2>Historial de Actividades</h2>
                </div>
            </div>
        </section>
        <!-- #FINAL# Centro del Contenido-->

        <?php
        include_once 'plantillas/dashboard-scripts.php';
        ?>