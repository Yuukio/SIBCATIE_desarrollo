<div class="card">
    <div class="header">
        <h2>
            REGISTRO DE ESPECIES
        </h2>
        <ul class="header-dropdown m-r--5">
            <li class="dropdown" style="vertical-align: top; margin-right: 10px; top: -5px">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-info waves-effect">Favorito</button>
                    <button type="button" class="btn btn-info waves-effect">Exportar</button>
                    <button type="button" class="btn btn-info waves-effect">Ocultar</button>
                    <button type="button" class="btn btn-info waves-effect" data-toggle="modal" data-target="#modalNuevo">Agregar</button>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-info waves-effect dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Listas
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block" data-toggle="modal" data-target="#modalFavoritos">Lista de Favoritos</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block" data-toggle="modal" data-target="#modalExcel">Lista de Excel</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block" data-toggle="modal" data-target="#modalOcultos">Lista de Ocultos</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Familia</th>
                        <th>Género</th>
                        <th>Epíteto</th>
                        <th>Autor</th>
                        <th>Ingreso</th>
                        <th>Visible</th>
                        <th>Revisión</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Familia</th>
                        <th>Género</th>
                        <th>Epíteto</th>
                        <th>Autor</th>
                        <th>Ingreso</th>
                        <th>Visible</th>
                        <th>Revisión</th>
                        <th>Opciones</th>

                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $sql = "SELECT P.idPlanta, P.autor, P.fecha_ingreso, P.fuente_informacion, P.altura, P.reproduccion, P.visible, P.revision, Fa.nombre_familia, 
                            Ge.nombre_genero, Ep.nombre_epiteto, Fo.nombre_forma, Co.nombre_color, De.nombre_determinado, Ti.nombre_hoja 
                            FROM planta P 
                            INNER JOIN familia Fa ON P.Familia_idFamilia = Fa.idFamilia
                            INNER JOIN genero Ge ON P.Genero_idGenero = Ge.idGenero
                            INNER JOIN epiteto Ep ON P.Epiteto_idEpiteto = Ep.idEpiteto
                            INNER JOIN forma Fo ON P.Forma_idForma = Fo.idForma
                            INNER JOIN color Co ON P.Color_idColor = Co.idColor
                            INNER JOIN tipohoja Ti ON P.TipoHoja_idTipoHoja = Ti.idTipoHoja
                            INNER JOIN determinadapor De ON P.DeterminadaPor_idDeterminadaPor = De.idDeterminadaPor";

                    $consulta = Conexion::obtener_conexion()->query($sql);

                    while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {

                        $nombre_cientifico = $fila['nombre_genero'] . ' ' . $fila['nombre_epiteto'];
                        $revision = $fila['revision'];
                        $visible = $fila['visible'];

                        /* ingreso de id mascara */
                        $id = $fila['idPlanta'];

                        $fecha = $fila['fecha_ingreso'];
                        $fecha = explode('-', $fecha);
                        $anno = $fecha[0];
                        $mes = $fecha[1];
                        $dia = $fecha[2];

                        $id_nuevo = str_pad($id, 4, "0", STR_PAD_LEFT);

                        $idMasc = $anno . $mes . $dia . $id_nuevo;

                        /* ingreso de iconos de revision */
                        if ($revision == 0) {

                            $revision = '
                                        <a style="color: #E74C3C">
                                            <i class="material-icons">close</i>
                                        </a>
                                        ';
                        } else {
                            $revision = '
                                        <a style="color: #27AE60">
                                            <i class="material-icons">check</i>
                                        </a>
                                        ';
                        }

                        /* ingreso de iconos de visible */
                        if ($visible == 0) {

                            $visible = '
                                        <a style="color: #E74C3C">
                                            <i class="material-icons">visibility_off</i>
                                        </a>
                                        ';
                        } else {
                            $visible = '
                                        <a style="color: #27AE60">
                                            <i class="material-icons">visibility</i>
                                        </a>
                                        ';
                        }

                        /* comparar fechas 
                          $sql_fecha = "SELECT MAX(p.fecha_ingreso), idPlanta FROM planta p";
                          $consulta2 = Conexion::obtener_conexion()->query($sql_fecha);
                          $fila_fecha = $consulta2->fetch(PDO::FETCH_ASSOC);

                          $time = time();
                          $hoy = date("Y-m-d", $time);
                          $fecha_max = $fila_fecha['p.fecha_ingreso'];

                          echo $hoy;
                          echo $fecha_max; */


                        /* asignando en tabla */
                        echo'
                        <tr valign="top">
                            <td>' . $idMasc . '</td> 
                            <td>' . $fila['nombre_familia'] . '</td>
                            <td>' . $fila['nombre_genero'] . '</td>
                            <td>' . $fila['nombre_epiteto'] . '</td>
                            <td>' . $fila['autor'] . '</td>
                            <td>' . $fila['fecha_ingreso'] . '</td>
                            <td style="text-align:center; width: 5px;">' . $visible . '</td>
                            <td style="text-align:center; width: 5px;">' . $revision . '</td>
                            <td style="text-align:center;">
                                <a href="#" style="color: #3498DB">
                                    <i class="material-icons" data-toggle="modal" data-target="#modalVer">search</i>
                                </a>
                                    <i>&nbsp;</i>
                                <a href="#" style="color: #AF7AC5">
                                    <i class="material-icons" data-toggle="modal" data-target="#modalActualizar">edit</i>
                                </a>
                                    <i>&nbsp;</i>
                                <a href="#" style="color: #F39C12">
                                    <i class="material-icons" data-toggle="modal" data-target="#modalFotos">add_a_photo</i>
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