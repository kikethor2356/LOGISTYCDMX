<?php


error_reporting(E_ALL & ~E_NOTICE);
session_start();







if($_SESSION['CorreoIngreso']){
 ?>


<link rel="stylesheet" href="../CSS/EstilosIndexAdmin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<?php


if (isset($_POST['btnCurriculum'])) {

        $IDbuscar = trim($_POST['btnCurriculum']);

        $directorioActual = dirname(__DIR__);
        $document_root = $_SERVER['DOCUMENT_ROOT'];
        include($document_root . '\CONEXION\conexion.php');
        



        if ($conex){
        $consulta = "SELECT * FROM curriculum WHERE Contador='". $IDbuscar."'";
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
                        $NombreImagen_Curriculum = $row["archivo_pdf"];
                        $vacante_Curriculum = $row["Vacante_Curriculum"];
                        
                        
                        ?>
                        
                        <div style="background-color: white; position:absolute; width: 100%; height: 100%; left: 0%; top: 0%; z-index:-4"></div>
                        <div style="background-color: white; position: absolute; width: 70%; height: 100%; z-index:-3; left: 15%; top: 0%; border-left: 3px solid black; border-right: 3px solid black;"></div>
                        <div style="background-color: #CD2210; position: absolute; z-index: -2; left: 15%; width: 70.3%; height: 17.5%; top: 6.5%"></div>
                        <div style="background-color: #F82812; position: absolute; z-index: -1; left: 18%; width: 20%; height: 100%; top: 0%"></div>

                        <title><?php echo "Curriculum:  $Nombre_Curriculum" ?></title>

                        <h1 class="nomcur"> <?php echo $Nombre_Curriculum; ?></h1>

                        <h1 class="appcur"> <?php echo $ApeliidoP_Curriculum; ?></h1>

                        <h1 class="apmcur"> <?php echo $ApellidoM_Curriculum; ?></h1>
                        <div style="position: absolute; left: 19%; border-radius: 50%; overflow: hidden; height: 5%; width: 2.5%; top: 49%; border: 2px solid white"><i class="fa-solid fa-at fa-2x" style="color: #ffffff; margin-left: 2.5px; margin-top: 2px;"></i></div>
                        <h1 class="corcur"> <?php echo $Correo_Curriculum; ?></h1>
                        <div style="position: absolute; left: 19%; height: 4.8%; width: 2.3%; border: 2px solid white; top: 36%; border-radius: 50%; overflow: hidden"><i class="fa-solid fa-phone-volume fa-2x" style="color: #ffffff;"></i></div>
                        <h1 class="telcur"> <?php echo $Telefono_Curriculum; ?></h1>
                        <div style="position: absolute; left: 19%; border-radius: 50%; overflow: hidden; height: 5%; width: 2.5%; top: 81%; border: 2px solid white"><i class="fa-solid fa-cake-candles fa-2x" style="color: #ffffff; margin-left: 4.2px;"></i></div>
                        <h1 class="naccur"> <?php echo $FechaNacimiento_Curriculum; ?></h1>

                        <h1 class="envcur"> <?php echo $FechaEnvio_Curriculum; ?></h1>

                        <h1 class="idcur"> <?php echo $ID_Curriculum; ?></h1>

                        <div class="imgcur"><img src="<?php echo $NombreImagen_Curriculum; ?>" width="100%" height="100%" alt="Imagen Curriculum"></div>
                        <h1 style="color: black; position: absolute; left: 41%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 85%">Vacante</h1>
                        <h1 class="vaccur"><?php echo $vacante_Curriculum; ?></h1>
                        
                        <?php
                         }





                 }
        

        }





}

else{

        echo "Ocurrio un error ";
}



}

else{


    header ("Location: $document_root\Errores\IndexNoSesion.php");
}

?>