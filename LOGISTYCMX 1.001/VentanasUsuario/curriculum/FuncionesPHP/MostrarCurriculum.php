<?php
$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');

$sql = "SELECT archivo_pdf FROM curriculum"; 

$result = $conex->query($sql);

        echo '<a href="' . "/LOGISTYCMX 1.001/VentanasUsuario/curriculum/FuncionesPHP"."/". $row["archivo_pdf"] . '">PreVisualizar el Curriculum del trabajador</a><br>';
        
// Cerrar la conexión a la base de datos
$conex->close();
?>
