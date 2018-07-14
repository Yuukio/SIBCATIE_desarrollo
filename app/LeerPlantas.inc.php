<?php
include_once 'Conexion.inc.php';
include_once 'RepositorioPlanta.inc.php';
include_once 'Planta.inc.php';

class LeerPlantas {

    public function leer_plantas() {

        $plantas = RepositorioPlanta::obtener_lista_plantas(Conexion::obtener_conexion());
        if (count($plantas)) {

            foreach ($plantas as $planta) {

                self::leer_planta($planta);
            }
        }
    }

    public function leer_planta($planta) {
        if (!isset($planta)) {
            return;
        }
        ?>

        <tr valign="top">
            <td>
        <?php
        echo $planta->getIdmascara();
        ?>
            </td>
            <td>
                <?php
                echo $planta->getFamilia_idfamilia();
                ?>
            </td>
            <td>
                <?php
                echo $planta->getGenero_idgenero();
                ?>
            </td>
            <td>
                <?php
                echo $planta->getEpiteto_idepiteto();
                ?>
            </td>
            <td>
                <?php
                echo 'Nombre Cientifico';
                ?>
            </td>
            <td>
                <?php
                echo $planta->getAutor();
                ?>
            </td>
            <td>
                <?php
                echo $planta->getFecha_ingreso();
                ?>
            </td>
            <td>
                <?php
                echo $planta->getFuente_informacion();
                ?>
            </td>
            <td>
                <?php
                echo $planta->getAltura();
                ?>
            </td>
            <td>
                <?php
                echo $planta->getForma_idforma();
                ?>
            </td>
            <td>
                <?php
                echo $planta->getColor_idcolor();
                ?>
            </td><td>
                <?php
                echo $planta->getTipohoja_idtipohoja();
                ?>
            </td>
            <td>
                <?php
                echo $planta->getDeterminadapor_iddeterminadapor();
                ?>
            </td>
            <td>
                <?php
                echo $planta->getReproduccion();
                ?>
            </td>
            <td>
                <?php
                echo $planta->getVisible();
                ?>
            </td>
            <td>
                <?php
                echo $planta->getRevision();
                ?>
            </td>    
            <td style="text-align:center;">
                <a href="#" style="color: #1ABB24">
                    <i class="material-icons">search</i>
                </a>
                <i>&nbsp;</i>
                <a href="#" style="color: #FF5733">
                    <i class="material-icons">add_a_photo</i>
                </a>
            </td>            
        </tr>

        <?php
    }

}
