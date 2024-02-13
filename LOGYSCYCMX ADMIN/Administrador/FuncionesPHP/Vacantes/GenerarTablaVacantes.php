<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');


if ($conex){
        $consulta = "SELECT * FROM vacantes ";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){
            $CONT = 0;
                while ($row = $resultado->fetch_array()){
                        $Nombre_Vacante = $row["Nombre_Vacante"];
                        $Descripcion_Vacante = $row["Descripcion_Vacante"];
                        $FechaSubida_Vacante = $row["FechaSubia_Vacante"];
                        $Id_Vacante = $row["id_Vacante"];
                        $CONT = $CONT+1;
                        

                        
                        
                        ?>

                            <tr>
                                <th><?php echo $CONT; ?></th>
                                <th><?php echo $Nombre_Vacante; ?></th>
                                <th><?php echo $Descripcion_Vacante; ?></th>
                                <th><?php echo $FechaSubida_Vacante; ?></th>

                                <form method="post" action="\LOGYSCYCMX ADMIN\Administrador\FuncionesPHP\Vacantes\BorrarVacante.php">
                                    <th>
                                        <button name="btnEliminarVacante" value="<?php echo $Id_Vacante; ?>">Eliminar</button>
                                    </th>    
                                </form>    
                            </tr>

                        
                        <?php

                }





        }
        

}



?>