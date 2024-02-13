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
                        $CONT = $CONT+1;
                        

                        
                        
                        ?>
                            <option value="<?php echo $Nombre_Vacante;?>">   <?php echo $Nombre_Vacante; ?>  </option> 
                        <?php

                }





        }
        

}



?>