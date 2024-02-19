<?php
$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');

$sql = "SELECT * FROM vacantes"; 

$result = $conex->query($sql);

$row = mysqli_fetch_assoc($result);

while ($row = $result->fetch_array()){

    $nombre = $row['Nombre_Vacante'];
    echo '<a href="' . "/LOGISTYCMX 1.001/VentanasUsuario/Vacantes/ArchivosVacantes"."/". $row["Archivo_Vacante"] . '">'.$nombre.'</a><br>';

}
       
               
// Cerrar la conexión a la base de datos
$conex->close();
?>
