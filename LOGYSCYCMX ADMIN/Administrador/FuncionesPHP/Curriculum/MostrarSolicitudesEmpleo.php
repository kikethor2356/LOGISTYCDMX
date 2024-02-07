<!--
<link rel="stylesheet" href="Estilos_MisClases.css">
<script src="Script_MisClases.js"></script>
-->


<?php

$directorioActual = dirname(__DIR__);
$rutaCompleta = $directorioActual;
$componentesRuta = explode('\\', $rutaCompleta);
$rutaRecortada = implode('\\', array_slice($componentesRuta, 0, 5));
include ($rutaRecortada . "\CONEXION\conexion.php");


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
                            <th> <button name="btnCurriculum" href="IndexCurriculumIndividual.php" value="<?php echo $ID_Curriculum;?>"><?php echo $Nombre_Curriculum ?></button> </th>
                            </tr>
                        
                        <?php

                }





        }
        

}




?>