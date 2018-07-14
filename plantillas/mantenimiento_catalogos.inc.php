<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-md-3">
            <div class="tabC">
                <button class="tablinks" onclick="openCity(event, 'Reino')" id="defaultOpen">Reino</button>
                <button class="tablinks" onclick="openCity(event, 'Division')">División</button>
                <button class="tablinks" onclick="openCity(event, 'Clase')">Clase</button>
                <button class="tablinks" onclick="openCity(event, 'Orden')">Orden</button>
                <button class="tablinks" onclick="openCity(event, 'Familia')">Familias</button>
                <button class="tablinks" onclick="openCity(event, 'Genero')">Géneros</button>
                <button class="tablinks" onclick="openCity(event, 'Epiteto')">Epítetos</button>
                <button class="tablinks" onclick="openCity(event, 'Color')">Colores</button>
                <button class="tablinks" onclick="openCity(event, 'Determinado')">Determinados por</button>
                <button class="tablinks" onclick="openCity(event, 'Forma')">Formas</button>
                <button class="tablinks" onclick="openCity(event, 'Tipo')">Tipos de Hoja</button>
                <button class="tablinks" onclick="openCity(event, 'Uso')">Usos</button>
                <button class="tablinks" onclick="openCity(event, 'Estado')">Estados de Salud</button>
            </div>
        </div>

        <!--***********TAB REINO************-->
        <div class="col-md-9">
            <div id="Reino" class="tabcontentC">
                <div class="card" id="tabla-reino">
                    <div class="header bg-cyan">
                        <h2>REINOS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#modalReino">Agregar nuevo reino</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Reino</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_reino = "SELECT `idReino`, `nombre_reino` FROM `reino`";

                                    $consulta_reino = Conexion::obtener_conexion()->query($sql_reino);

                                    while ($fila_reino = $consulta_reino->fetch(PDO::FETCH_ASSOC)) {

                                        $id_reino = $fila_reino['idReino'];

                                        $id_reino_nuevo = str_pad($id_reino, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_reino_nuevo . '</td>
                                            <td>' . $fila_reino['nombre_reino'] . '</td>
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

        <!--***********TAB DIVISION************-->
        <div class="col-md-9">
            <div id="Division" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>DIVISIONES</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nueva división</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>División</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_division = "SELECT `idDivision`, `nombre_division` FROM `division`";

                                    $consulta_division = Conexion::obtener_conexion()->query($sql_division);

                                    while ($fila_division = $consulta_division->fetch(PDO::FETCH_ASSOC)) {

                                        $id_division = $fila_division['idDivision'];

                                        $id_division_nuevo = str_pad($id_division, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_division_nuevo . '</td>
                                            <td>' . $fila_division['nombre_division'] . '</td>
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

        <!--***********TAB CLASE************-->
        <div class="col-md-9">
            <div id="Clase" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>CLASES</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nueva clase</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Clase</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_clase = "SELECT `idClase`, `nombre_clase` FROM `clase`";

                                    $consulta_clase = Conexion::obtener_conexion()->query($sql_clase);

                                    while ($fila_clase = $consulta_clase->fetch(PDO::FETCH_ASSOC)) {

                                        $id_clase = $fila_clase['idClase'];

                                        $id_clase = str_pad($id_clase, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_clase . '</td>
                                            <td>' . $fila_clase['nombre_clase'] . '</td>
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

        <!--***********TAB ORDEN************-->
        <div class="col-md-9">
            <div id="Orden" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>ORDEN</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo orden</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Orden</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_orden = "SELECT `idOrden`, `nombre_orden` FROM `orden`";

                                    $consulta_orden = Conexion::obtener_conexion()->query($sql_orden);

                                    while ($fila_orden = $consulta_orden->fetch(PDO::FETCH_ASSOC)) {

                                        $id_orden = $fila_orden['idOrden'];

                                        $id_orden_nuevo = str_pad($id_orden, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_orden_nuevo . '</td>
                                            <td>' . $fila_orden['nombre_orden'] . '</td>
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

        <!--***********TAB FAMILIA************-->
        <div class="col-md-9">
            <div id="Familia" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>FAMILIAS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nueva familia</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Familia</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_familia = "SELECT `idFamilia`, `nombre_familia` FROM `familia`";

                                    $consulta_familia = Conexion::obtener_conexion()->query($sql_familia);

                                    while ($fila_familia = $consulta_familia->fetch(PDO::FETCH_ASSOC)) {

                                        $id_familia = $fila_familia['idFamilia'];

                                        $id_familia_nuevo = str_pad($id_familia, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_familia_nuevo . '</td>
                                            <td>' . $fila_familia['nombre_familia'] . '</td>
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

        <!--***********TAB GENEROS************-->
        <div class="col-md-9">
            <div id="Genero" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>GÉNEROS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo Género</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Género</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_genero = "SELECT `idGenero`, `nombre_genero` FROM `genero`";

                                    $consulta_genero = Conexion::obtener_conexion()->query($sql_genero);

                                    while ($fila_genero = $consulta_genero->fetch(PDO::FETCH_ASSOC)) {

                                        $id_genero = $fila_genero['idGenero'];

                                        $id_genero_nuevo = str_pad($id_genero, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_genero_nuevo . '</td>
                                            <td>' . $fila_genero['nombre_genero'] . '</td>
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

        <!--***********TAB EPITETO************-->
        <div class="col-md-9">
            <div id="Epiteto" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>EPÍTETOS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuev Epíteto</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Epíteto</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_epiteto = "SELECT `idEpiteto`, `nombre_epiteto` FROM `epiteto`";

                                    $consulta_epiteto = Conexion::obtener_conexion()->query($sql_epiteto);

                                    while ($fila_epiteto = $consulta_epiteto->fetch(PDO::FETCH_ASSOC)) {

                                        $id_epiteto = $fila_epiteto['idEpiteto'];

                                        $id_epiteto_nuevo = str_pad($id_epiteto, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_epiteto_nuevo . '</td>
                                            <td>' . $fila_epiteto['nombre_epiteto'] . '</td>
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

        <!--***********TAB COLOR************-->
        <div class="col-md-9">
            <div id="Color" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>COLORES</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo Color</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Color</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_color = "SELECT `idColor`, `nombre_color` FROM `color`";

                                    $consulta_color = Conexion::obtener_conexion()->query($sql_color);

                                    while ($fila_color = $consulta_color->fetch(PDO::FETCH_ASSOC)) {

                                        $id_color = $fila_color['idColor'];

                                        $id_color_nuevo = str_pad($id_color, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_color_nuevo . '</td>
                                            <td>' . $fila_color['nombre_color'] . '</td>
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

        <!--***********TAB DETERMINADO POR************-->
        <div class="col-md-9">
            <div id="Determinado" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>DETERMINACIONES</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo Determinador</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Determinadores</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_determinado = "SELECT `idDeterminadaPor`, `nombre_determinado` FROM `determinadapor`";

                                    $consulta_determinado = Conexion::obtener_conexion()->query($sql_determinado);

                                    while ($fila_determinado = $consulta_determinado->fetch(PDO::FETCH_ASSOC)) {

                                        $id_determinado = $fila_determinado['idDeterminadaPor'];

                                        $id_determinado_nuevo = str_pad($id_determinado, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_determinado_nuevo . '</td>
                                            <td>' . $fila_determinado['nombre_determinado'] . '</td>
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

        <!--***********TAB FORMA************-->
        <div class="col-md-9">
            <div id="Forma" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>FORMAS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nueva Forma</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Forma</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_forma = "SELECT `idForma`, `nombre_forma` FROM `forma`";

                                    $consulta_forma = Conexion::obtener_conexion()->query($sql_forma);

                                    while ($fila_forma = $consulta_forma->fetch(PDO::FETCH_ASSOC)) {

                                        $id_forma = $fila_forma['idForma'];

                                        $id_forma_nuevo = str_pad($id_forma, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_forma_nuevo . '</td>
                                            <td>' . $fila_forma['nombre_forma'] . '</td>
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

        <!--***********TAB TIPOS DE HOJA************-->
        <div class="col-md-9">
            <div id="Tipo" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>TIPOS DE HOJAS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo Tipo de Hoja</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Tipo de Hoja</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_tipo = "SELECT `idTipoHoja`, `nombre_hoja` FROM `tipohoja`";

                                    $consulta_tipo = Conexion::obtener_conexion()->query($sql_tipo);

                                    while ($fila_tipo = $consulta_tipo->fetch(PDO::FETCH_ASSOC)) {

                                        $id_tipo = $fila_tipo['idTipoHoja'];

                                        $id_tipo_nuevo = str_pad($id_tipo, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_tipo_nuevo . '</td>
                                            <td>' . $fila_tipo['nombre_hoja'] . '</td>
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

        <!--***********TAB USOS************-->
        <div class="col-md-9">
            <div id="Uso" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>USOS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo Uso</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Uso</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_uso = "SELECT `idUso`, `nombre_uso` FROM `uso`";

                                    $consulta_uso = Conexion::obtener_conexion()->query($sql_uso);

                                    while ($fila_uso = $consulta_uso->fetch(PDO::FETCH_ASSOC)) {

                                        $id_uso = $fila_uso['idUso'];

                                        $id_uso_nuevo = str_pad($id_uso, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_uso_nuevo . '</td>
                                            <td>' . $fila_uso['nombre_uso'] . '</td>
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

        <!--***********TAB ESTADOS DE SALUD************-->
        <div class="col-md-9">
            <div id="Estado" class="tabcontentC">
                <div class="card">
                    <div class="header bg-cyan">
                        <h2>ESTADOS DE SALUD</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Agregar nuevo Estado de Salud</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Estado de Salud</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_estado = "SELECT `idEstadoSalud`, `nombre_estado` FROM `estadosalud`";

                                    $consulta_estado = Conexion::obtener_conexion()->query($sql_estado);

                                    while ($fila_estado = $consulta_estado->fetch(PDO::FETCH_ASSOC)) {

                                        $id_estado = $fila_estado['idEstadoSalud'];

                                        $id_estado_nuevo = str_pad($id_estado, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_estado_nuevo . '</td>
                                            <td>' . $fila_estado['nombre_estado'] . '</td>
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
</div>

<!-- Modal REINO -->
<div class="modal fade" id="modalReino" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="width: 600px; margin: 30px auto">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="defaultModalLabel">Agregar nuevo Reino</h4>
            </div>
            <form id="reino" method="POST">
                <div class="modal-body">
                    <label for="firstName">Nombre del Reino</label>
                    <input type="text" class="form-control" name="nombre_reino" id="nombre_reino" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" id="guardar-reino">AGREGAR</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" aria-label="Close">CANCELAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--
<script>
    $(document).on("ready", function () {
        enviarDatosReino();
    });

    function enviarDatosReino() {
        $("#reino").on("submit", function (e) {
            e.preventDefault();
            var reino = $(this).serialize();
            console.log(reino);
        });
    }
</script>
-->

<script>
    $($document).ready(function () {
        $('#guardar_reino').click(function () {
            var datos = $('#reino').serialize();

            alert(datos);
            return false;
            
            $.ajax({
                type: "POST",
                url: "insertar.php",
                data: datos,
                success: function () {

                }
            });
        });
    });

</script>


<?php
//include_once './plantillas/modal-catalogos.inc.php';
?>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontentC");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

