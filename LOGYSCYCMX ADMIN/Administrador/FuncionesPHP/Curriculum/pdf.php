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

    <div style="background-color: #CD2210; position: absolute; z-index: -2; left: -6%; width: 112%; height: 17.5%; top: 4%"></div>
    <div style="background-color: #F82812; position: absolute; z-index: -1; left: 5%; width: 20%; height: 109%; top: -4.5%"></div>

    <title><?php echo "Curriculum:  $Nombre_Curriculum" ?></title>

    <h1 style="position: absolute;color: white;font-family: Calibri;top: 3%; left: 39%;font-size: 250%;">'.$Nombre_Curriculum.'</h1>

    <h1 style="position: absolute;color: white;top: 8%;left: 39%;font-family: Calibri;font-size: 250%;">'.$ApeliidoP_Curriculum.'</h1>

    <h1 style="position: absolute;color: white;top: 13%;left: 39%;font-family: Calibri;font-size: 250%;"> '.$ApellidoM_Curriculum.'</h1>
    <h1 style="color: black; position: absolute; left: 41%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 24%">Resumen</h1>
    <h1 style="position: absolute;color: black;top: 29%;left: 41%;width: 42%;font-family: Calibri;">'.$Resumen_Curriculum.'</h1>
    <h1 style="color: black; position: absolute; left: 41%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 51%">Historial</h1>
    <h1 style="position: absolute;color: black;top: 56%;left: 41%;width: 42%;font-family: Calibri;">'.$Historial_Curriculum.'</h1>
    <div style="position: absolute; left: 19%; border-radius: 50%; overflow: hidden; height: 5%; width: 2.5%; top: 60%; border: 2px solid white"><i class="fa-solid fa-graduation-cap fa-2x" style="color: #ffffff;"></i></div>
    <h1 style="position: absolute;color: white;top: 62.5%;left: 19.5%;width: 18%;font-family: Calibri;">'.$Formacion_Curriculum.'</h1>
    <div style="position: absolute; left: 19%; border-radius: 50%; overflow: hidden; height: 5%; width: 2.5%; top: 49%; border: 2px solid white"><i class="fa-solid fa-at fa-2x" style="color: #ffffff; margin-left: 2.5px; margin-top: 2px;"></i></div>
    <h1 style="position: absolute;color: White;top: 53.5%;left: 19.5%;width: 17%;font-family: Calibri;font-size:110%;">'.$Correo_Curriculum.'</h1>
    <div style="position: absolute; left: 19%; height: 4.8%; width: 2.3%; border: 2px solid white; top: 36%; border-radius: 50%; overflow: hidden"><i class="fa-solid fa-phone-volume fa-2x" style="color: #ffffff;"></i></div>
    <h1 style="position: absolute;color: White;top: 38.5%;left: 19.5%;font-family: Calibri;">'.$Telefono_Curriculum.'</h1>
    <div style="position: absolute; left: 19%; border-radius: 50%; overflow: hidden; height: 5%; width: 2.5%; top: 81%; border: 2px solid white"><i class="fa-solid fa-cake-candles fa-2x" style="color: #ffffff; margin-left: 4.2px;"></i></div>
    <h1 style="position: absolute;color: White;top: 78%;left: 22.3%;font-family: Calibri;">'.$FechaNacimiento_Curriculum.'</h1>

    <h1 style="position: absolute;color: white;top: 90%;left: 19%;font-family: Calibri;">'.$FechaEnvio_Curriculum.'</h1>

    <h1 style="position: absolute;color: black;top: 90%;left: 80%;font-family: Verdana, Geneva, Tahoma, sans-serif;">'.$ID_Curriculum.'</h1>

    <h1 style="color: black; position: absolute; left: 41%; font-family: Verdana, Geneva, Tahoma, sans-serif; top: 85%">Vacante</h1>

        </body>

</html>
';

use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("Curriculum_".$Nombre_Curriculum.".pdf", array('Attachment' => '0'));

?>