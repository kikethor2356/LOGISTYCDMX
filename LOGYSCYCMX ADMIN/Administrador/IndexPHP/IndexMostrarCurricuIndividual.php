
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
                        $vacante_Curriculum = $row["Vacante_Curriculum"];
                        
                        
                        ?>
                        
                        <div style="background-color: white; position:absolute; width: 100%; height: 100%; left: 0%; top: 0%; z-index:-4"></div>
                        <div style="background-color: #CACACA; position: absolute; width: 70%; height: 100%; z-index:-3; left: 15%; top: 0%;"></div>
                        <div style="background-color: #3932BF; position: absolute; z-index: -2; left: 15%; width: 70%; height: 17.5%; top: 6.5%"></div>
                        <div style="background-color: #817BF6; position: absolute; z-index: -1; left: 18%; width: 20%; height: 100%; top: 0%"></div>

                        <title><?php echo "Curriculum:  $Nombre_Curriculum" ?></title>

                        <h1 class="nomcur"> <?php echo $Nombre_Curriculum; ?></h1>

                        <h1 class="appcur"> <?php echo $ApeliidoP_Curriculum; ?></h1>

                        <h1 class="apmcur"> <?php echo $ApellidoM_Curriculum; ?></h1>
                        <h1 style="color: black; position: absolute; left: 41%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 24%">Resumen</h1>
                        <h1 class="rescur"> <?php echo $Resumen_Curriculum; ?></h1>
                        <h1><?php echo $vacante_Curriculum; ?></h1>
                        <h1 style="color: black; position: absolute; left: 41%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 51%">Historial</h1>
                        <h1 class="hiscur"> <?php echo $Historial_Curriculum; ?></h1>
                        <img src="https://cdn-icons-png.flaticon.com/512/2532/2532543.png" style="position: absolute; left: 19%; border-radius: 50%; overflow: hidden; height: 5%; width: 2.5%; top: 60%; border: 2px solid black">
                        <h1 class="forcur"> <?php echo $Formacion_Curriculum; ?></h1>
                        <img src="https://www.shareicon.net/download/2015/12/11/685925_email_512x512.png" style="position: absolute; left: 19%; border-radius: 50%; overflow: hidden; height: 5%; width: 2.5%; top: 49%; border: 2px solid black">
                        <h1 class="corcur"> <?php echo $Correo_Curriculum; ?></h1>
                        <img src="https://cdn-icons-png.flaticon.com/512/73/73552.png" style="position: absolute; left: 19%; border-radius: 50%; overflow: hidden; height: 5%; width: 2.5%; border: 2px solid black; top: 36%">
                        <h1 class="telcur"> <?php echo $Telefono_Curriculum; ?></h1>
                        <img src="https://cdn-icons-png.flaticon.com/512/1178/1178944.png" style="position: absolute; left: 19%; border-radius: 50%; overflow: hidden; height: 5%; width: 2.5%; top: 81%; border: 2px solid black">
                        <h1 class="naccur"> <?php echo $FechaNacimiento_Curriculum; ?></h1>

                        <h1 class="envcur"> <?php echo $FechaEnvio_Curriculum; ?></h1>

                        <h1 class="idcur"> <?php echo $ID_Curriculum; ?></h1>

                        <div class="imgcur"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" width="100%" height="100%" alt="Imagen Curriculum"></div>
                        
                        <?php
                        /* <?php echo $NombreImagen_Curriculum; ?> */
                         }





                 }
        

        }





}

else{

        echo "Ocurrio un error ";
}







?>