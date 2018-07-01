<?php

include_once 'Conexion.inc.php';
include_once 'Planta.inc.php';

class RepositorioPlanta {

    public static function insertarPlanta($conexion, $planta) {

        $planta_insertada = false;

        if (isset($conexion)) {
            try {
               
                $aql = "INSERT INTO planta(idMascara, Familia_idFamilia, Genero_idGenero, Epiteto_idEpiteto, fecha_ingreso, fuente_informacion, altura, autor, "
                        . "Forma_idForma, Color_idColor, TipoHoja_idTipoHoja, reproduccion, DeterminadaPor_idDeterminadaPor, "
                        . "visible, revision, activo, excel) "
                        . "VALUES (:idMascara, :Familia_idFamilia, :Genero_idGenero, :Epiteto_idEpiteto, NOW(), :fuente_informacion, :altura, :autor, "
                        . ":Forma_idForma, :Color_idColor, :TipoHoja_idTipoHoja, :reproduccion, :DeterminadaPor_idDeterminadaPor, "
                        . "'', '', '', :excel)";
                    
                $sentencia = $conexion->prepare($sql);

                $idmascara = $planta->getIdmascara();
                $familia_idfamilia = $planta->getFamilia_idfamilia();
                $genero_idgenero = $planta->getGenero_idgenero();
                $epiteto_idepiteto = $planta->getEpiteto_idepiteto();
                $autor = $planta->getAutor();
                $fuente_informacion = $planta->getFuente_informacion();
                $altura = $planta->getAltura();
                $forma_idforma = $planta->getForma_idforma();
                $color_idcolor = $planta->getColor_idcolor();
                $tipohoja_idtipohoja = $planta->getTipohoja_idtipohoja();
                $determinadapor_iddeterminadapor = $planta->getDeterminadapor_iddeterminadapor();
                $excel = $planta->getExcel();
                $reproduccion = $planta->getReproduccion();

                $sentencia->bindParam(':idMascara', $idmascara);
                $sentencia->bindParam(':Genero_idGenero', $genero_idgenero);
                $sentencia->bindParam(':Epiteto_idEpiteto', $epiteto_idepiteto);
                $sentencia->bindParam(':autor', $autor);
                $sentencia->bindParam(':fuente_informacion', $fuente_informacion);
                $sentencia->bindParam(':altura', $altura);
                $sentencia->bindParam(':Forma_idForma', $forma_idforma);
                $sentencia->bindParam(':Color_idColor', $color_idcolor);
                $sentencia->bindParam(':TipoHoja_idTipoHoja', $tipohoja_idtipohoja);
                $sentencia->bindParam(':Familia_idFamilia', $familia_idfamilia);
                $sentencia->bindParam(':DeterminadaPor_idDeterminadaPor', $determinadapor_iddeterminadapor);
                $sentencia->bindParam(':excel', $excel);
                $sentencia->bindParam(':reproduccion', $reproduccion);
                

                $planta_insertada = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR ' . $ex->getMessage();
            }

            return $planta_insertada;
        }
    }

    public static function obtener_lista_plantas($conexion) {

        $plantas = [];

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM Planta ORDER BY idPlanta ASC";

                $sentencia = $conexion->prepare($sql);

                $sentencia->execute();

                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {

                        $plantas[] = new Planta(
                                
                                $fila['idMascara'], $fila['Familia_idFamilia'], $fila['Genero_idGenero'], $fila['Epiteto_idEpiteto'], $fila['fecha_ingreso'], 
                                $fila['fuente_informacion'], $fila['altura'], $fila['autor'], $fila['Forma_idForma'], $fila['Color_idColor'], $fila['TipoHoja_idTipoHoja'], 
                                $fila['reproduccion'], $fila['DeterminadaPor_idDeterminadaPor'], $fila['visible'], $fila['revision'], $fila['activo'], $fila['excel']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $plantas;
    }
}
