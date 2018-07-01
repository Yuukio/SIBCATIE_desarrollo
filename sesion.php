<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'SIBCATIE';

include_once 'plantillas/documento-declaracion.inc.php';
?>

<body style="background: #f2f2f2;">

    <!-- Navigation -->
    <nav class="navbar-sesion navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img  src="img/sibcatie-logo.png">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="regresar-home" href="index.php">Regresar al Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid div-sesion sombra">
        <!--registrar cuenta-->
        <div class="container-fluid div-registro">
            <div class="row">
                <div class="col-md-12 col-all">
                    <h2>Registrar cuenta en SIBCATIE</h2>
                    <p class="subhead">¡Únete a SIBCATIE y descubre tus ventajas!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-all">
                    <p>
                        <label for="signup_with_profile_email" class="required">
                            <span class="label-text">Dirección de Correo Electrónico</span>
                            <input class="std-form">
                        </label>
                    </p>
                </div>
                <div class="col-md-6 col-all">
                    <p>
                        <label for="signup_with_profile_username" class="required">
                            <span class="label-text">Nombre de Usuario</span>
                            <input class="std-form">
                        </label>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-all">
                    <p>
                        <label for="signup_with_profile_password" class="required">
                            <span class="label-text">Contrasena</span>
                            <input class="std-form">
                        </label>
                    </p>
                </div>
                <div class="col-md-6 col-all">
                    <p>
                        <label for="signup_with_profile_password" class="required">
                            <span class="label-text">Repetir contrasena</span>
                            <input class="std-form">
                        </label>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-all" style="text-align: center">
                    <button class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" type="submit">
                        Crear una Cuenta
                    </button>
                </div>
                <div class="col-md-12" style="text-align: center; padding-top: 20px">
                    <p>
                        <small>
                            Al hacer clic en "Registrarse", aceptas  
                            <a href="#">Términos de Servicio</a> 
                            y la 
                            <a href="#">Política de Privacidad</a>.
                        </small>
                    </p>
                </div>
            </div>
        </div>

        <!--iniciar secion-->
        <div class="col-md-4">
            <div class="col-md-12 col-all">
                <h2>Inicia sesion</h2>
                <p class="subhead">Ya tienes cuenta? Inicia sesion mas abajo.</p>
            </div>
            <div class="col-md-12 col-all">
                <p>
                    <label for="signup_with_profile_email" class="required">
                        <span class="label-text">Correo Electronico o Usuario</span>
                        <input class="std-form">
                    </label>
                </p>
            </div>
            <div class="col-md-12 col-all">
                <p>
                    <label for="signup_with_profile_password" class="required">
                        <span class="label-text">Contraseña</span>
                        <input class="std-form">
                    </label>
                </p>
            </div>
            <div class="col-md-12 col-all" style="text-align: center">
                <button class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" type="submit">
                    Iniciar Sesión
                </button>
            </div>
            <div class="col-md-12" style="text-align: center; padding-top: 20px">
                <p>
                    <small>
                        ¿Olvidaste tu contraña? Ingrese 
                        <a href="#">aquí.</a>
                    </small>
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container-fluid text-center" style="padding-top: 100px">
        <!--<a class="nav-link js-scroll-trigger" href="#page-top" style="font-size: 50px;">^</a>-->
        <p>Copyright &copy; 2018 - SIBCATIE creado por <a href="https://www.catie.ac.cr/">www.catie.ac.cr</a></p>
    </footer>

    <?php
    include_once './plantillas/documento-cierre.inc.php';
    ?>