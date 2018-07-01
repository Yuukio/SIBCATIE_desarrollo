<?php
include_once 'Conexion.inc.php';
include_once 'RepositorioHistorial.inc.php';
include_once 'Historial.inc.php';

class LeerHistorial {

    public function leer_historial() {

        $historial = RepositorioHistorial::obtener_lista_historial(Conexion::obtener_conexion());
        if (count($historial)) {

            foreach ($historial as $actividad) {

                self::leer_actividad($actividad);
            }
        }
    }

    public function leer_actividad($actividad) {
        if (!isset($actividad)) {
            return;
        }
        ?>

        <tr valign="top">
            <td>
                <?php
                echo $actividad->getFechaHistorial();
                ?>
            </td>
            <td>
                <?php
                echo $actividad->getUsuarioIdUsuario();
                ?>
            </td>
            <td>
                <?php
                echo $actividad->getPlantaIdPlanta();
                ?>
            </td>
            <td>
                <?php
                echo $actividad->getAccion();
                ?>
            </td>
        </tr>

        <?php
    }

}
