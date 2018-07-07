<?php

include ('conexion2.php');

$funcion = $_POST['funcion'];

// ********INSERTAR REINO
if ($funcion == 'insertarReino') {
    $nombre_reino = $_POST["n_reino"];
    try {
        $query = "INSERT INTO reino (nombre_reino) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_reino));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}

// ********INSERTAR DIVISION
elseif ($funcion == 'insertarDivision') {
    $nombre_division = $_POST["n_division"];
    try {
        $query = "INSERT INTO division (nombre_division) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_division));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}

// ********INSERTAR CLASE
elseif ($funcion == 'insertarClase') {
    $nombre_clase = $_POST["n_clase"];
    try {
        $query = "INSERT INTO clase (nombre_clase) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_clase));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}

// ********INSERTAR ORDEN
elseif ($funcion == 'insertarOrden') {
    $nombre_orden = $_POST["n_orden"];
    try {
        $query = "INSERT INTO orden (nombre_orden) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_orden));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}

// ********INSERTAR FAMILIA
elseif ($funcion == 'insertarFamilia') {
    $nombre_familia = $_POST["n_familia"];
    try {
        $query = "INSERT INTO familia (nombre_familia) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_familia));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}

// ********INSERTAR GENERO
elseif ($funcion == 'insertarGenero') {
    $nombre_genero = $_POST["n_genero"];
    try {
        $query = "INSERT INTO genero (nombre_genero) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_genero));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}

// ********INSERTAR EPITETO
elseif ($funcion == 'insertarEpiteto') {
    $nombre_epiteto = $_POST["n_epiteto"];
    try {
        $query = "INSERT INTO epiteto (nombre_epiteto) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_epiteto));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}

// ********INSERTAR COLOR
elseif ($funcion == 'insertarColor') {
    $nombre_color = $_POST["n_color"];
    try {
        $query = "INSERT INTO color (nombre_color) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_color));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}

// ********INSERTAR DETERMINACION
elseif ($funcion == 'insertarDeterminado') {
    $nombre_determinado = $_POST["n_determinado"];
    try {
        $query = "INSERT INTO determinadopor (nombre_determinado) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_determinado));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}

// ********INSERTAR FORMA
elseif ($funcion == 'insertarForma') {
    $nombre_forma = $_POST["n_forma"];
    try {
        $query = "INSERT INTO forma (nombre_forma) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_forma));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}

// ********INSERTAR TIPO DE HOJA
elseif ($funcion == 'insertarTipoHoja') {
    $nombre_tipohoja = $_POST["n_tipohoja"];
    try {
        $query = "INSERT INTO tipohoja (nombre_hoja) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_tipohoja));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}
// ********INSERTAR USO
elseif ($funcion == 'insertarUso') {
    $nombre_uso = $_POST["n_uso"];
    try {
        $query = "INSERT INTO uso (nombre_uso) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_uso));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}

// ********INSERTAR ESTADO DE SALUD
elseif ($funcion == 'insertarEstadoSalud') {
    $nombre_estadosalud = $_POST["n_estadosalud"];
    try {
        $query = "INSERT INTO estadosalud (nombre_estado) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_estadosalud));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}
// ********INSERTAR REGISTRO
elseif ($funcion == 'insertarRegistro') {
    $id_reino = $_POST['id_reino'];
    $id_division = $_POST['id_division'];
    $id_clase = $_POST['_id_clase'];
    $id_orden = $_POST['id_orden'];
    $id_familia = $_POST['id_familia'];
    $id_genero = $_POST['id_genero'];
    $id_epiteto = $_POST['id_epiteto'];
    $id_determinado = $_POST['id_determinado'];
    $id_color = $_POST['id_color'];
    $id_forma = $_POST['id_forma'];
    $id_tipo = $_POST['id_tipo'];
    $autor = $_POST['autor'];
    $fuente = $_POST['fuente'];
    $altura = $_POST['altura'];
    $revision = $_POST['revision'];
    $visible = $_POST['visible'];

    $nombre_cientifico = $genero . ' ' . $epiteto;

    try {
        $query = "INSERT INTO `planta`(`Familia_idFamilia`, `Genero_idGenero`, `Epiteto_idEpiteto`, `fecha_ingreso`, `fuente_informacion`, `altura`, `autor`, `Forma_idForma`, "
                . "`Color_idColor`, `TipoHoja_idTipoHoja`, `DeterminadaPor_idDeterminadaPor`, `visible`, `revision`, `orden_idOrden`, `clase_idClase`, `reino_idReino`, "
                . "`division_idDivision`, `nombre_cientifico`) "
                . "VALUES ('$id_familia', '$id_genero', '$id_epiteto', 'NOW()', '$fuente', '$altura', '$autor', '$id_forma', '$id_color', '$id_tipo', '$id_determinado', "
                . "'$visible', '$revision', '$id_orden', '$id_clase', '$id_reino', '$id_division', '$nombre_cientifico')";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($id_familia));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}
// ********INSERTAR ESTADO DE SALUD
elseif ($funcion == 'insertarNombreComun') {
    $nombre_comun = $_POST["n_comun"];
    try {
        $query = "INSERT INTO estadosalud (nombre_estado) VALUES (?)";
        $stmt = $pdoConn->prepare($query);
        $stmt->execute(array($nombre_comun));
        echo '1';
    } catch (Exception $e) {
        echo '0';
    }
}