<?php

include ('conexion2.php');

$nombre_reino = $_POST['nombre-reino'];

$sql = "INSERT INTO reino (nombre_reino) VALUES ($nombre_reino)";

$stmt = $pdoConn->prepare($query);

echo $stmt->execute(array($nombre_reino));
