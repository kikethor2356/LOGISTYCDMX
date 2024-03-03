<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');


if ($conex){
        $consulta = "SELECT * FROM admin";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){

                while ($row = $resultado->fetch_array()){
                        $Nombre_Admin = $row["Nombre"];
                        $Apeliidos_Admin = $row["Apellido"];
                        $Correo_Admin = $row["Correo"];
                        $Telefono_Admin = $row["Telefono_Admin"];
                        $FechaCreacion_Admin = $row["FechaCreacion_Admin"];
                        $Creador_Admin = $row["Creador_Admin"];
                   
                        
                        ?>

                            <tr  class="divscur">
                                <th><?php echo $Nombre_Admin; ?></th>
                                <th><?php echo $Apeliidos_Admin; ?></th>
                                <th><?php echo $Correo_Admin; ?></th>
                                <th><?php echo $Telefono_Admin; ?></th>
                                <th><?php echo $FechaCreacion_Admin; ?></th>
                                <th><?php echo $Creador_Admin; ?></th>
                                
                            

                            </tr>

                        
                        <?php

                }





        }
       

}



?>