<?php

$nombre_reino = $_POST["n_reino"];

$sql_reino = "INSERT INTO reino (nombre_reino) VALUES ('$nombre_reino')";

$sentencia_reino = Conexion::obtener_conexion()->prepare($sql_reino);

echo $sentencia_reino->execute();
