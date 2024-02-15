<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');


if ($conex){
        $consulta = "SELECT * FROM curriculum ";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){

                while ($row = $resultado->fetch_array()){
                        $Nombre_Curriculum = $row["Nombres_CURRICULUM"];
                        $ApeliidoP_Curriculum = $row["ApellidoP_CURRICULUM"];
                        $ApellidoM_Curriculum = $row["ApellidoM_CURRICULUM"];
                        $Correo_Curriculum = $row["Correo_CURRICULUM"];
                        $Telefono_Curriculum = $row["telefono_CURRICULUM"];
                        $FechaNacimiento_Curriculum = $row["FechaNacimiento_CURRICULUM"];
                        $FechaEnvio_Curriculum = $row["FechaEnvio_CURRICULUM"];
                        $ID_Curriculum = $row["Contador"]; 
                        $Vacante_Curriculum = $row["Vacante_Curriculum"];


                        include ('C:\xampp\htdocs\LOGISTYCDMX\LOGISTYCMX 1.001\VentanasUsuario\curriculum\FuncionesPHP\MostrarCurriculum.php');

                        
                        
                        ?>

                            <tr  class="divscur">
                            
                            <form method="post" action="\LOGYSCYCMX ADMIN\Administrador\IndexPHP\IndexMostrarCurricuIndividual.php">
                                <th class="DIVcur"> <button name="btnCurriculum" href="IndexCurriculumIndividual.php" value="<?php echo $ID_Curriculum;?>" class="curname"><?php echo $Nombre_Curriculum?><div></div><?php echo $Vacante_Curriculum ?></button> </th>
                            </form>

                            <form method="post" action="\LOGYSCYCMX ADMIN\Administrador\FuncionesPHP\Curriculum\BorrarCurriculum.php">
                                <th style="width:13.8%; position:relative;top: 0%; background-color: black; left: 97%"> <button name="btnCurriculumBorrar" type="submit" value="<?php echo $ID_Curriculum; ?>" class="delt"><i class="fa-solid fa-trash fa-3x" style="color: #000000;"></i></button> </th>
                            </form>

                            <form method="post" action="\LOGYSCYCMX ADMIN\Administrador\FuncionesPHP\Curriculum\pdf.php" target="_blank">
                                <th style="width:13.8%; position:relative; background-color: black; left: 69.5%; bottom: 0%"> <button class="dwld" value="<?php echo $ID_Curriculum; ?>" name="btnPDFCurriculum"><i class="fa-solid fa-file-arrow-down fa-3x" style="color: #000000;"></i></button> </th>
                            </form>
                            
                            


                            </tr>

                        
                        <?php

                }





        }
        

}



?>