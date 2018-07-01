<div class="col-md-8">
    <!--Usuarios registrados-->
    <div class="card">
        <header>
            <div class="header bg-blue-grey" style="padding: 0px !important; padding-top: 8px">
                <ul class="nav nav-tabs" style="padding-left: 15px; padding-bottom: 15px; font-size: 18px; font-weight: normal; border-bottom: 0px solid #b7b7b7">
                    <li class="active"><a data-toggle="tab" href="#administradores" style="color: #fff !important">ADMINISTRADORES</a></li>
                    <li><a data-toggle="tab" href="#ayudantes" style="color: #fff !important">AYUDANTES</a></li>
                    <li><a data-toggle="tab" href="#publico" style="color: #fff !important">PÚBLICO</a></li>
                </ul>
            </div>
        </header>
        <div class="body" style="height: 580px">

            <div class="tab-content">

                <!--******************************TAB 1-->
                <div id="administradores" class="tab-pane fade in active">
                    <div class="body" style="padding: 0px">
                        <div class="table-responsive" style="height: 550px">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Email</th>
                                        <th>Usuario</th>
                                        <th>Teléfono</th>
                                        <th>Sección</th>
                                        <th>Activo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_admin = "SELECT u.nombre, u.apellido, u.email, u.activo, u.telefono, u.nombre_usuario, s.nombre_seccion FROM usuario u
                                                    INNER JOIN seccion s ON u.seccion_idseccion=s.idseccion
                                                    WHERE u.rol_idrol = 1";

                                    $consulta_admin = Conexion::obtener_conexion()->query($sql_admin);

                                    while ($file_admin = $consulta_admin->fetch(PDO::FETCH_ASSOC)) {

                                        echo'
                                            <tr valign="top">
                                                <td>' . $file_admin['apellido'] . '</td> 
                                                <td>' . $file_admin['nombre'] . '</td>
                                                <td>' . $file_admin['nombre_usuario'] . '</td>
                                                <td>' . $file_admin['email'] . '</td>
                                                <td>' . $file_admin['telefono'] . '</td>
                                                <td>' . $file_admin['nombre_seccion'] . '</td>
                                                <td>' . $file_admin['activo'] . '</td>
                                            </td>
                                            ';
                                            }
                                            ?>                                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <!--******************************TAB 2-->
                <div id="ayudantes" class="tab-pane fade">
                    <div id="administradores" class="tab-pane fade in active">
                        <div class="body" style="padding: 0px">
                            <div class="table-responsive" style="height: 550px">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr style="background: white">
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Email</th>
                                            <th>Usuario</th>
                                            <th>Teléfono</th>
                                            <th>Sección</th>
                                            <th>Activo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql_ayudante = "SELECT u.nombre, u.apellido, u.email, u.activo, u.telefono, u.nombre_usuario, s.nombre_seccion FROM usuario u
                                                        INNER JOIN seccion s ON u.seccion_idseccion=s.idseccion
                                                        WHERE u.rol_idrol = 2";

                                        $consulta_ayudante = Conexion::obtener_conexion()->query($sql_ayudante);

                                        while ($file_ayudante = $consulta_ayudante->fetch(PDO::FETCH_ASSOC)) {

                                            echo'
                                            <tr valign="top">
                                                <td>' . $file_ayudante['apellido'] . '</td> 
                                                <td>' . $file_ayudante['nombre'] . '</td>
                                                <td>' . $file_ayudante['nombre_usuario'] . '</td>
                                                <td>' . $file_ayudante['email'] . '</td>
                                                <td>' . $file_ayudante['telefono'] . '</td>
                                                <td>' . $file_ayudante['nombre_seccion'] . '</td>
                                                <td>' . $file_ayudante['activo'] . '</td>
                                            </td>
                                            ';
                                        }
                                        ?>                                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!--******************************TAB 3-->
                <div id="publico" class="tab-pane fade">
                    <div id="administradores" class="tab-pane fade in active">
                        <div class="body" style="padding: 0px">
                            <div class="table-responsive" style="height: 550px">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr style="background: white">
                                            <th>Email</th>
                                            <th>Usuario</th>
                                            <th>Activo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql_publico = "SELECT email, activo, nombre_usuario FROM usuario
                                                        WHERE rol_idrol = 3";

                                        $consulta_publico = Conexion::obtener_conexion()->query($sql_publico);

                                        while ($file_publico = $consulta_publico->fetch(PDO::FETCH_ASSOC)) {

                                            echo'
                                            <tr valign="top">
                                                <td>' . $file_publico['nombre_usuario'] . '</td>
                                                <td>' . $file_publico['email'] . '</td>
                                                <td>' . $file_publico['activo'] . '</td>
                                            </td>
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
</div>
