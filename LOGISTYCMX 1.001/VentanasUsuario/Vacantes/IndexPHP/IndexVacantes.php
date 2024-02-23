<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacantes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/Landing/css_landing.css">
</head>
<body>

<section id="header">
            <a href="#"><img src="" class="logo" alt="Logo"></a>
    
            <div id="Navbar">
                <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/curriculum/IndexPHP/Postularse.php">Postularse</a></li>
                <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/Vacantes/IndexPHP/IndexVacantes.php">Vacantes</a></li>  
                <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/Landing/landing_index.php">Contactanos</a></li>
                <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/Landing/Index_Nosotros.php">Nosotros</a></li>    
            </div>
        </section>
    
        <div class="container-vacantes">
        <div class="vacantes">
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
        </div>
        </div>
        
</body>
</html>



