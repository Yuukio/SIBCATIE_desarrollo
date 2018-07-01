<div class="col-md-4">
    <div class="card">
        <div class="header bg-blue">
            <h2>REGISTRAR USUARIO</h2>
        </div>
        <div class="body" style="height: 580px">
            <div class="container-fluid" style="height: 675px">
                <div class="row clearfix">

                    <!---->

                    <h4 class="mb-3" style="padding-bottom: 15px; text-align: center">Complete los campos de registro</h4>
                    <form class="needs-validation"  novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Nombre</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <!--<div class="invalid-feedback">
                                    Valid first name is required.
                                </div>-->
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="lastName">Apellido</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <!--<div class="invalid-feedback">
                                    Valid last name is required.
                                </div>-->
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="email@ejemplo.com" required>
                            <!--<div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>-->
                        </div>

                        <div class="row" style="padding-top: 20px">
                            <div class="col-md-6 mb-3">
                                <label for="username">Usuario </label>
                                <input type="text" class="form-control" id="username" required>
                                <!--<div class="invalid-feedback" style="width: 100%;">
                                    Your username is required.
                                </div>-->
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tel">Número telefónico</label>
                                <input type="tel" class="form-control" id="tel" placeholder="">
                                <!--<div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>-->
                            </div>
                        </div>

                        <hr class="mb-4">

                        <div class="container-fluid">
                            <div class="col-md-6">
                                <h4 class="">Rol administrativo</h4>
                                <div class="d-block my-3">
                                    <div class="custom-control custom-radio">
                                        <input id="admin" name="roladmin" type="radio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="admin">Administrador</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="ayudante" name="roladmin" type="radio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="ayudante">Ayudante</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h4 class="">Sección del Jardín</h4>
                                <div class="d-block my-3">
                                    <div class="custom-control custom-radio">
                                        <input id="nativo" name="seccion" type="radio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="nativo">Flora nativa</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="cultivo" name="seccion" type="radio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="cultivo">Cultivos botánicos</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Registrar cuenta nueva</button>
                    </form>

                    <!---->
                </div>
            </div>
        </div>
    </div>
</div>