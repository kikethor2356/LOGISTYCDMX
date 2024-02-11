<link rel="stylesheet" href="../CSS/EstilosIndexAdmin.css">

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

    <img src="imgUsuario.png">

    <div class="container">
        <h1 style="text-align: center; color: #ff4d4d;">Currículum Vitae</h1>
        <h1 style="text-align: center; color: #ff4d4d;">Vacante: '.$vacante_Curriculum.'</h1>
        <div class="section">
            <h2>Datos Personales</h2>
            <p><strong>Nombre:</strong> '.$Nombre_Curriculum.' '.$ApeliidoP_Curriculum.' '.$ApellidoM_Curriculum.'</p>
            <p><strong>Correo electrónico:</strong> '.$Correo_Curriculum.'</p>
            <p><strong>Teléfono:</strong> '.$Telefono_Curriculum.'</p>
            <p><strong>Fecha de nacimiento:</strong> '.$FechaNacimiento_Curriculum.'</p>
        </div>

        <div class="section">
            <h2>Experiencia Laboral</h2>
            <p><strong>Resumen:</strong> '.$Resumen_Curriculum.'</p>
            <p><strong>Historial:</strong> '.$Historial_Curriculum.'</p>
        </div>

        <div class="section">
            <h2>Educación</h2>
            <p><strong>Formación:</strong> '.$Formacion_Curriculum.'</p>
        </div>
        <h3> '.$FechaEnvio_Curriculum.' </h3>

        <h3> '.$ID_Curriculum.' </h3>
    </div>
        </body>

</html>
';

use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("Curriculum_".$Nombre_Curriculum.".pdf", array('Attachment' => '0'));

?>