<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\LOGYSCYCMX ADMIN\CONEXION\conexion.php') ;


if ($conex){
        $consulta = "SELECT * FROM vacantes ";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){
            $CONT = 0;
                while ($row = $resultado->fetch_array()){
                        $Nombre_Vacante = $row["Nombre_Vacante"];
                        $Descripcion_Vacante = $row["Descripcion_Vacante"];
                        $CONT = $CONT+1;
                        

                        
                        
                        ?>

                            <tr>
                                <th><?php echo $CONT; ?></th>
                                <th><?php echo $Nombre_Vacante; ?></th>
                                <th><?php echo $Descripcion_Vacante; ?></th>

                                  
                            </tr>

                        
                        <?php

                }

                if($CONT == 0){

                    ?>
                    <tr>
                            <th colspan="3">No hay Vacantes</th>
                                  
                    </tr>

        <?php

                }





        }
        

}



?>