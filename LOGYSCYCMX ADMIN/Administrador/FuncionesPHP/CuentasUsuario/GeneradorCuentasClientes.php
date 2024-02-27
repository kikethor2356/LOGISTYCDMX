<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');


if ($conex){
        $consulta = "SELECT * FROM cliente_usuario ";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){

                while ($row = $resultado->fetch_array()){
                        $Nombre_Usuario = $row["nombre_usuario"];
                        $Apeliidos_Usuario = $row["apellidos_usuario"];
                        $Correo_Usuario = $row["correo_usuario"];
                        $Telefono_Usuario = $row["telefono"];
                        $Categoria_Usuario = $row["categoria_usuario"];
                        $FechaCreacion_Usuario = $row["fecha_creacion_usuario"];
                   
                        
                        ?>

                            <tr  class="divscur">
                                <th><?php echo $Nombre_Usuario; ?></th>
                                <th><?php echo $Apeliidos_Usuario; ?></th>
                                <th><?php echo $Correo_Usuario; ?></th>
                                <th><?php echo $Telefono_Usuario; ?></th>
                                <th><?php echo $Categoria_Usuario; ?></th>
                                <th><?php echo $FechaCreacion_Usuario; ?></th>
                            

                            </tr>

                        
                        <?php

                }





        }
       

}



?>