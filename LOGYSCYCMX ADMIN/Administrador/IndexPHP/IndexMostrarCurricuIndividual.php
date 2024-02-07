
<link rel="stylesheet" href="../CSS/EstilosIndexAdmin.css">

<?php


if (isset($_POST['btnCurriculum'])) {

        $IDbuscar = trim($_POST['btnCurriculum']);

        $document_root = $_SERVER['DOCUMENT_ROOT'];

        // Construye la ruta a la carpeta "conexion"
        include($document_root . '\LOGYSCYCMX ADMIN\CONEXION\conexion.php') ;
        



        if ($conex){
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
                        $NombreImagen_Curriculum = $row["Imagen_Curriculum"];
                        
                        
                        ?>
                        
                        <div style="background-color: #C16D46; position:absolute; width: 100%; height: 100%; left: 0%; top: 0%; z-index:-1"></div>


                        <title><?php echo "Curriculum:  $Nombre_Curriculum" ?></title>

                        <h1 class="nomcur"> <?php echo $Nombre_Curriculum; ?></h1>

                        <h1 class="appcur"> <?php echo $ApeliidoP_Curriculum; ?></h1>

                        <h1 class="apmcur"> <?php echo $ApellidoM_Curriculum; ?></h1>

                        <h1 class="rescur"> <?php echo $Resumen_Curriculum; ?></h1>

                        <h1 class="hiscur"> <?php echo $Historial_Curriculum; ?></h1>

                        <h1 class="forcur"> <?php echo $Formacion_Curriculum; ?></h1>

                        <h1 class="corcur"> <?php echo $Correo_Curriculum; ?></h1>

                        <h1 class="telcur"> <?php echo $Telefono_Curriculum; ?></h1>

                        <h1 class="naccur"> <?php echo $FechaNacimiento_Curriculum; ?></h1>

                        <h1 class="envcur"> <?php echo $FechaEnvio_Curriculum; ?></h1>

                        <h1 class="idcur"> <?php echo $ID_Curriculum; ?></h1>

                        <div class="imgcur"><img src="<?php echo $NombreImagen_Curriculum; ?>" width="100%" height="100%" alt="Imagen Curriculum"></div>
                        
                        <?php

                         }





                 }
        

        }





}

else{

        echo "Ocurrio un error ";
}







?>