<?php
Conexion::abrir_conexion();
$total_usuarios = RepositorioUsuario::obtenerNumeroUsuarios(Conexion::obtener_conexion());
?>

<body id="page-top" data-spy="scroll" data-target=".navbar" data-offset="60">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img  src="img/sibcatie-logo.png">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">

                    <?php
                    if (true) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="home.php">Administracion</a>
                        </li>
                        <?php
                    }
                    ?>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#page-top">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#buscar">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Semana</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#galeria">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#nosotros">¿Quiénes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#">
                            <?php
                            echo $total_usuarios;
                            ?>
                        </a> 
                    </li>
                    <li style="padding-right: 60px"></li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="sesion.php">Iniciar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>