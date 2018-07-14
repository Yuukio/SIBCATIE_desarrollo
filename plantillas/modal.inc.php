
<!-- Modal Registro nuevo -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content centrar">
            <div class="modal-body">
                <!--***************************-->
                <div style="width: 100%; height: 100%">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="username" placeholder="Username" required="">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                        </div>

                        <div class="mb-3">
                            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country</label>
                                <select class="form-control" id="country" required="">
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">State</label>
                                <select class="form-control" id="state" required="">
                                    <option value="">Choose...</option>
                                    <option>California</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">Zip</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required="">
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Save this information for next time</label>
                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="paypal">PayPal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                <small class="text-muted">Full name as displayed on card</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-cvv">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                    </form>
                </div>

                <!--***************************-->
            </div>
        </div>
    </div>
</div>

<!-- Modal Actualizar registro -->
<div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Actualizar registro</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ver registro completo -->
<div class="modal fade" id="modalVer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Datos completos del Registro</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal editar Galeria -->
<div class="modal fade" id="modalFotos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar galería de registro</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Registros favoritos -->
<div class="modal fade" id="modalFavoritos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content centrar">
            <div class="modal-body">

                <!--********CENTRO DEL CONTENIDO*********-->
                <div class="card-modal">
                    <div class="header">
                        <h2>LISTA DE FAVORITOS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </li>
                        </ul>
                    </div>
                    <div class="body" style="height: 600px">
                        <div class="table-responsive" style="height: 100%">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Familia</th>
                                        <th>Género</th>
                                        <th>Epíteto</th>
                                        <th>Nombre Científico</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_favorito = "SELECT genero.nombre_genero, epiteto.nombre_epiteto, planta.idPlanta, familia.nombre_familia FROM `favorito` 
                                                    INNER JOIN (planta INNER JOIN genero ON planta.Genero_idGenero=genero.idGenero
                                                    INNER JOIN epiteto ON planta.Epiteto_idEpiteto=epiteto.idEpiteto
                                                    INNER JOIN familia ON planta.Familia_idFamilia=familia.idFamilia
                                                    ) ON favorito.Planta_idPlanta=planta.idPlanta";

                                    $consulta_favorito = Conexion::obtener_conexion()->query($sql_favorito);

                                    while ($fila_favorito = $consulta_favorito->fetch(PDO::FETCH_ASSOC)) {

                                        $id_favorito = $fila_favorito['idPlanta'];
                                        $cientifico_favorito = 'nombre cientifico';

                                        $id_favorito_nuevo = str_pad($id_favorito, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_favorito_nuevo . '</td>
                                            <td>' . $fila_favorito['nombre_familia'] . '</td>
                                            <td>' . $fila_favorito['nombre_epiteto'] . '</td>
                                            <td>' . $fila_favorito['nombre_genero'] . '</td>
                                            <td>' . $cientifico_favorito . '</td>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Registros a Exportar -->
<div class="modal fade" id="modalExcel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">

                <!--********CENTRO DEL CONTENIDO*********-->
                <div class="card-modal">
                    <div class="header">
                        <h2>LISTA DE FAVORITOS</h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </li>
                        </ul>
                    </div>
                    <div class="body" style="height: 600px">
                        <div class="table-responsive" style="height: 100%">
                                <!--<table class="table table-bordered table-striped table-hover">-->
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr style="background: white">
                                        <th>ID</th>
                                        <th>Familia</th>
                                        <th>Género</th>
                                        <th>Epíteto</th>
                                        <th>Nombre Científico</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_exportar = "SELECT genero.nombre_genero, epiteto.nombre_epiteto, planta.idPlanta, familia.nombre_familia FROM `exportar` 
                                                    INNER JOIN (planta INNER JOIN genero ON planta.Genero_idGenero=genero.idGenero
                                                    INNER JOIN epiteto ON planta.Epiteto_idEpiteto=epiteto.idEpiteto
                                                    INNER JOIN familia ON planta.Familia_idFamilia=familia.idFamilia
                                                    ) ON exportar.Planta_idPlanta=planta.idPlanta";

                                    $consulta_exportar = Conexion::obtener_conexion()->query($sql_exportar);

                                    while ($fila_exportar = $consulta_exportar->fetch(PDO::FETCH_ASSOC)) {

                                        $id_exportar = $fila_exportar['idPlanta'];
                                        $cientifico_exportar = 'nombre cientifico';

                                        $id_exportar_nuevo = str_pad($id_exportar, 3, "0", STR_PAD_LEFT);

                                        echo'
                                        <tr valign="top">
                                            <td>' . $id_exportar_nuevo . '</td>
                                            <td>' . $fila_exportar['nombre_familia'] . '</td>
                                            <td>' . $fila_exportar['nombre_epiteto'] . '</td>
                                            <td>' . $fila_exportar['nombre_genero'] . '</td>
                                            <td>' . $cientifico_exportar . '</td>
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

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Registros ocultos -->
<div class="modal fade" id="modalOcultos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Lista de registros Ocultos</h4>
            </div>
            <div class="modal-body">

                <!--********CENTRO DEL CONTENIDO*********-->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>