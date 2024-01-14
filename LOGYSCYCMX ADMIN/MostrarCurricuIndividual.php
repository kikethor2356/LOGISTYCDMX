<!--
<link rel="stylesheet" href="Estilos_MisClases.css">
<script src="Script_MisClases.js"></script>
-->


<?php


if (isset($_POST['btnCurriculum'])) {

        $IDbuscar = trim($_POST['btnCurriculum']);


        $inc = include("CONEXION/conexion.php");



        if ($inc){
        $consulta = "SELECT * FROM curriculum WHERE Contador='". $IDbuscar."'";
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



                        <h1> <?php echo $Nombre_Curriculum; ?></h1>

                        <h1> <?php echo $ApeliidoP_Curriculum; ?></h1>

                        <h1> <?php echo $ApellidoM_Curriculum; ?></h1>

                        <h1> <?php echo $Resumen_Curriculum; ?></h1>

                        <h1> <?php echo $Historial_Curriculum; ?></h1>

                        <h1> <?php echo $Formacion_Curriculum; ?></h1>

                        <h1> <?php echo $Correo_Curriculum; ?></h1>

                        <h1> <?php echo $Telefono_Curriculum; ?></h1>

                        <h1> <?php echo $FechaNacimiento_Curriculum; ?></h1>

                        <h1> <?php echo $FechaEnvio_Curriculum; ?></h1>

                        <h1> <?php echo $ID_Curriculum; ?></h1>
                        
                        <?php

                         }





                 }
        

        }





}

else{

        echo "Ocurrio un error ";
}







?>