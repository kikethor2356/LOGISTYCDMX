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
        <title>Curriculum: '.$Nombre_Curriculum.'</title>
    </head>

    <body>

    <div style="background-color: #CD2210; position: absolute; z-index: -2; left: -6%; width: 112%; height: 17.5%; top: 4%"></div>
    <div style="background-color: #F82812; position: absolute; z-index: -1; left: 5%; width: 25%; height: 109%; top: -4.5%"></div>


    <h1 style="position: absolute;color: white;font-family: Calibri;top: 3%; left: 32%;font-size: 250%;">'.$Nombre_Curriculum.'</h1>

    <h1 style="position: absolute;color: white;top: 8%;left: 32%;font-family: Calibri;font-size: 250%;">'.$ApeliidoP_Curriculum.'</h1>

    <h1 style="position: absolute;color: white;top: 13%;left: 32%;font-family: Calibri;font-size: 250%;"> '.$ApellidoM_Curriculum.'</h1>
    <h1 style="color: black; position: absolute; left: 35%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 21%">Resumen</h1>
    <h1 style="position: absolute;color: black;top: 25%;left: 35%;width: 68%;font-family: Calibri;">'.$Resumen_Curriculum.'</h1>
    <h1 style="color: black; position: absolute; left: 35%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 50%">Historial</h1>
    <h1 style="position: absolute;color: black;top: 55%;left: 35%;width: 42%;font-family: Calibri;">'.$Historial_Curriculum.'</h1>
    <div style="position: absolute; left: 7%; height: 2%; width: 5%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 39%; font-size: 140%; color: white">Formación</div>
    <h1 style="position: absolute;color: white;top: 41%;left: 7%;width: 21%;font-family: Calibri; font-size: 140%;">'.$Formacion_Curriculum.'</h1>
    <div style="position: absolute; left: 7%; height: 2%; width: 5%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 32%; font-size: 140%; color: white">Correo</div>
    <h1 style="position: absolute;color: black;top: 34%;left: 7%;width: 17%;font-family: Calibri;font-size:80%;">'.$Correo_Curriculum.'</h1>
    <div style="position: absolute; left: 7%; height: 2%; width: 5%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 23%; font-size: 140%; color: white">Teléfono</div>
    <h1 style="position: absolute;color: White;top: 25%;left: 7%;font-family: Calibri; font-size: 140%">'.$Telefono_Curriculum.'</h1>
    <div style="position: absolute; left: 7%; height: 2%; width: 21%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 58%; font-size: 120%; color: white">Fecha de nacimiento</div>
    <h1 style="position: absolute;color: White;top: 61%;left: 7%;font-family: Calibri; font-size: 150%">'.$FechaNacimiento_Curriculum.'</h1>

    <h1 style="position: absolute;color: white;top: 95%;left: 7%;font-family: Calibri;">'.$FechaEnvio_Curriculum.'</h1>

    <h1 style="position: absolute;color: black;top: 95%;left: 95%;font-family: Verdana, Geneva, Tahoma, sans-serif;">'.$ID_Curriculum.'</h1>

    <h1 style="color: black; position: absolute; left: 35%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 85%">Vacante</h1>

        </body>

</html>
';

use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("Curriculum_".$Nombre_Curriculum.".pdf", array('Attachment' => '0'));

?>