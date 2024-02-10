<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\LOGYSCYCMX ADMIN\CONEXION\conexion.php') ;

require "vendor\autoload.php";

if (isset($_POST['btnPDFCurriculum'])){
    $IdCurriculumImprimir = $_POST['btnPDFCurriculum'];



    $consulta = "SELECT * FROM curriculum WHERE Contador='$IdCurriculumImprimir'";
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
                        $IMG_Curriculum = $row["Imagen_Curriculum"];
                        
                    
                    }




}

}


$html = '

<html>

    <head>
        <meta charset="utf-8">

    </head>

    <body>

        <h1>Titulo</h1>

        <h3> '.$Nombre_Curriculum.' </h3>

        <h3> '.$ApeliidoP_Curriculum.' </h3>

        <h3> '.$ApellidoM_Curriculum.' </h3>

        <h3> '.$Resumen_Curriculum.' </h3>

        <h3> '.$Historial_Curriculum.' </h3>

        <h3> '.$Formacion_Curriculum.' </h3>

        <h3> '.$Correo_Curriculum.' </h3>

        <h3> '.$Telefono_Curriculum.' </h3>

        <h3> '.$FechaNacimiento_Curriculum.' </h3>

        <h3> '.$FechaEnvio_Curriculum.' </h3>

        <h3> '.$ID_Curriculum.' </h3>


        <img src="imgUsuario.png">

        </body>

</html>
';

use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("Curriculum_".$Nombre_Curriculum.".pdf", array('Attachment' => '0'));

?>