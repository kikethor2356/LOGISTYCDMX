<link rel="stylesheet" href="../CSS/EstilosIndexAdmin.css">



<?php
//pariente
$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];

// Construye la ruta a la carpeta "conexion"
include($document_root . '\LOGYSCYCMX ADMIN\CONEXION\conexion.php') ;




if ($conex){
        $consulta = "SELECT * FROM curriculum ";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){

                while ($row = $resultado->fetch_array()){
                        $Nombre_Curriculum = $row["Nombres_CURRICULUM"];
                        $ApeliidoP_Curriculum = $row["ApellidoP_CURRICULUM"];
                        $ApellidoM_Curriculum = $row["ApellidoM_CURRICULUM"];
                        $Resumen_Curriculum = $row["Resumen_CURRICULUM"];
                        $Historial_Curriculum = $row["Historial_CURRICULUM"];
                        $Formacion_Curriculum = $row["Formacion_CURRICULUM"];
                        $Correo_Curriculum = $row["Correo_CURRICULUM"];
                        $Telefono_Curriculum = $row["telefono_CURRICULUM"];
                        $FechaNacimiento_Curriculum = $row["FechaNacimiento_CURRICULUM"];
                        $FechaEnvio_Curriculum = $row["FechaEnvio_CURRICULUM"];
                        $ID_Curriculum = $row["Contador"];

                        
                        
                        ?>


                            <tr>
                            <div  class="divcur"> <button name="btnCurriculum" href="IndexCurriculumIndividual.php" value="<?php echo $ID_Curriculum;?>" class="btncur"><?php echo $Nombre_Curriculum ?></button> </div>
                            </tr>
                        
                        <?php

                }





        }
        

}



?>