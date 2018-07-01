<!DOCTYPE html>
<html>

    <?php
    $titulo = 'Home';
    include_once 'plantillas/head-dashboard.php';
    ?>

    <body class="theme-red">

        <?php
        $home = "active";
        //------ Cargar Pantalla ------
        include_once 'plantillas/cargar-pantalla.php';
        //------ FINAL Cargar Pantalla ------
        //------ Barra superior ------
        include_once 'plantillas/barra-superior.php';
        // ------ FINAL - Barra ruperior ------
        // ------ Menu lateral ------
        include_once 'plantillas/menu-lateral.php';
        // ------ Final - Menu lateral ------
        //include_once 'app/LeerHistorial.inc.php';
        ?>

        <!-- Centro del Contenido-->
        <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-md-2" style="height: 384px">
                        <div class="container-fluid" style="vertical-align: middle">
                            <div class="row">
                                <div class="datos col-md-12">
                                    <div class="info-box-3 bg-teal hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">speaker_notes</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">IDENTIFICADAS</div>
                                            <div class="number">1250</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="datos col-md-12">
                                    <div class="info-box-3 bg-green hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">speaker_notes_off</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">INDEFINIDAS</div>
                                            <div class="number">25</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="datos col-md-12">
                                    <div class="info-box-3 bg-light-green hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">folder_shared</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">USUARIOS</div>
                                            <div class="number">75</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <!--Especies no identificadas-->
                        <div class="card">
                            <div class="header bg-red">
                                <h2>ESPECIES INDEFINIDAS</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="material-icons">zoom_out_map</i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Agregar nuevo registro</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="scrollable-area">
                                    <div class="row">
                                        <div class="table-responsive">
                                        <!--<table class="table table-bordered table-striped table-hover">-->
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr style="background: white">
                                                        <th>ID</th>
                                                        <th>Familia</th>
                                                        <th>Ingreso</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql_no_identificadas = "SELECT f.nombre_familia, p.fecha_ingreso, p.idPlanta 
                                                                            FROM planta p 
                                                                            INNER JOIN familia f ON p.Familia_idFamilia = f.idFamilia 
                                                                            WHERE p.revision = 0";

                                                    $consulta_no_identificadas = Conexion::obtener_conexion()->query($sql_no_identificadas);

                                                    while ($file_no_identificada = $consulta_no_identificadas->fetch(PDO::FETCH_ASSOC)) {

                                                        $id_no_identificada = $file_no_identificada['idPlanta'];

                                                        $fecha = $file_no_identificada['fecha_ingreso'];
                                                        $fecha = explode('-', $fecha);
                                                        $anno = $fecha[0];
                                                        $mes = $fecha[1];
                                                        $dia = $fecha[2];

                                                        $id_nuevo = str_pad($id_no_identificada, 4, "0", STR_PAD_LEFT);

                                                        $idMasc_no_identificada = $anno . $mes . $dia . $id_nuevo;

                                                        echo'
                                                        <tr valign="top">
                                                            <td>' . $id_nuevo . '</td> 
                                                            <td>' . $file_no_identificada['nombre_familia'] . '</td>
                                                            <td>' . $file_no_identificada['fecha_ingreso'] . '</td>
                                                            <td style="text-align:center;">
                                                                <a href="#" style="color: #5DADE2">
                                                                    <i class="material-icons">edit</i>
                                                                </a>
                                                                    <i>&nbsp;</i>
                                                                <a href="#" style="color: #E74C3C">
                                                                    <i class="material-icons">delete</i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                            ';
                                                    }
                                                    ?>                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card">
                            <div class="header bg-orange">
                                <h2>NUEVA TABLA</h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body" style="height: 295px">
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-md-7">
                <!--Especies no identificadas-->
                <div class="card">
                    <div class="header bg-green">
                        <h2>REGISTRO DE ACTIVIDAD</h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="material-icons">zoom_out_map</i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="scrollable-area">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr style="background-color: white">
                                                <th>Fecha</th>
                                                <th>Usuario</th>
                                                <th>Registro</th>
                                                <th>Actividad</th>
                                                <th>Revisión</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $sql_historial = "SELECT planta.idPlanta, planta.revision, usuario.nombre_usuario, historial.fecha_historial, historial.accion, planta.fecha_ingreso
                                                                    FROM historial
                                                                    INNER JOIN planta ON historial.Planta_idPlanta=planta.idPlanta
                                                                    INNER JOIN usuario ON historial.Usuario_idUsuario=usuario.idUsuario
                                                                    ORDER BY historial.fecha_historial ASC";

                                            $consulta_historial = Conexion::obtener_conexion()->query($sql_historial);

                                            while ($file_historial = $consulta_historial->fetch(PDO::FETCH_ASSOC)) {

                                                $nombre_usuario_historial = $file_historial['nombre_usuario'];
                                                $id_historial = $file_historial['idPlanta'];
                                                $revision_historial = $file_historial['revision'];

                                                $fecha_historial = $file_historial['fecha_ingreso'];
                                                $fecha_historial = explode('-', $fecha_historial);
                                                $anno_historial = $fecha_historial[0];
                                                $mes_historial = $fecha_historial[1];
                                                $dia_historial = $fecha_historial[2];

                                                $id_historial = str_pad($id_historial, 4, "0", STR_PAD_LEFT);

                                                $idMasc_historial = $anno_historial . $mes_historial . $dia_historial . $id_historial;

                                                /* ingreso de iconos de revision */
                                                if ($revision_historial == 0) {

                                                    $revision_historial = '
                                                        <a style="color: #E74C3C">
                                                            <i class="material-icons">close</i>
                                                        </a>
                                                        ';
                                                } else {
                                                    $revision_historial = '
                                                        <a style="color: #27AE60">
                                                            <i class="material-icons">check</i>
                                                        </a>
                                                        ';
                                                }

                                                echo'
                                                <tr valign="top">
                                                <td>' . $file_historial['fecha_historial'] . '</td> 
                                                <td>' . $nombre_usuario_historial . '</td>
                                                <td>' . $idMasc_historial . '</td>
                                                <td>' . $file_historial['accion'] . '</td> 
                                                <td style="text-align:center;">' . $revision_historial . '</td>
                                                ';
                                            }
                                            ?>         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <!--Usuarios registrados-->
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>USUARIOS ADMINISTRADORES</h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="javascript:void(0);">
                                    <i class="material-icons">zoom_out_map</i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="scrollable-area">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr style="background: white">
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Teléfono</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql_usuarios = "SELECT nombre, apellido, email, telefono FROM usuario ORDER BY apellido ASC";

                                            $consulta_usuarios = Conexion::obtener_conexion()->query($sql_usuarios);

                                            while ($file_usuarios = $consulta_usuarios->fetch(PDO::FETCH_ASSOC)) {

                                                $nombre_completo = $file_usuarios['nombre'] . ' ' . $file_usuarios['apellido'];

                                                echo'
                                                <tr valign="top">
                                                <td>' . $nombre_completo . '</td> 
                                                <td>' . $file_usuarios['email'] . '</td>
                                                <td>' . $file_usuarios['telefono'] . '</td>
                                                ';
                                            }
                                            ?>                                                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include_once 'plantillas/dashboard-scripts.php';
        ?>