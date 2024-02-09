<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
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

                            <tr  class="divscur">
                            
                            <form method="post" action="\LOGYSCYCMX ADMIN\Administrador\IndexPHP\IndexMostrarCurricuIndividual.php">
                                <th class="DIVcur"> <button name="btnCurriculum" href="IndexCurriculumIndividual.php" value="<?php echo $ID_Curriculum;?>" class="curname"><?php echo $Nombre_Curriculum ?></button> </th>
                            </form>


                            <form method="post" action="\LOGYSCYCMX ADMIN\Administrador\FuncionesPHP\Curriculum\BorrarCurriculum.php">
                                <th style="width:13.8%; position:absolute;top: 0%; background-color: black; left: 347%"> <button name="btnCurriculumBorrar" type="submit" value="<?php echo $ID_Curriculum; ?>" class="delt"><img src="https://cdn-icons-png.flaticon.com/512/1214/1214594.png" width="100%"></button> </th>
                            </form>

                            <form>
                                <th style="width:14.2%; position:absolute; background-color: black; left: 330%; bottom: 0%"> <button class="dwld"><img src="https://i.pinimg.com/originals/59/cd/12/59cd12b893adbc7e742588622453beda.png" width="100%"></button> </th>
                            </form>


                            </tr>

                        
                        <?php

                }





        }
        

}



?>