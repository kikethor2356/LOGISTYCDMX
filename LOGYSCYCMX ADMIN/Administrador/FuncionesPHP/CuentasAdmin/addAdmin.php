<?php
// Include the database connection file
$directorioActual = dirname(__DIR__);
$rutaCompleta = $directorioActual;
$componentesRuta = explode('\\', $rutaCompleta);
$rutaRecortada = implode('\\', array_slice($componentesRuta, 0, 4));
include ($rutaRecortada . "\CONEXION\conexion.php");

if (isset($_POST['submitAdmin'])) {
	// Escape special characters in string for use in SQL statement	
	$nomAdm = mysqli_real_escape_string($conex, $_POST['Nombre']);
	$apellidoAdm = mysqli_real_escape_string($conex, $_POST['Apellido']);
	$correoAdm = mysqli_real_escape_string($conex, $_POST['Correo']);
	$passwordAdm = mysqli_real_escape_string($conex, $_POST['Password']);


	$hash_correo_admin = hash('sha256', $correoAdm);
	$hash_contrasena_admin = hash('sha256', $passwordAdm);
	


	
	// Check for empty fields
	if (empty($nomAdm) || empty($apellidoAdm) || empty($correoAdm) || empty($passwordAdm)) {
		if (empty($nomAdm)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($apellidoAdm)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}	
		if (empty($correoAdm)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}	
        if (empty($passwordAdm)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}	
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		echo "hola1";
		// If all the fields are filled (not empty) 
		// Insert data into database
		$result = mysqli_query($conex, "INSERT INTO  Admin (`Nombre`, `Apellido`,`Correo`,`Password_Admin`) VALUES ('$nomAdm', '$apellidoAdm', '$hash_correo_admin','$hash_contrasena_admin')");
		
		header ("Location: $directorioActual \LOGYSCYCMX ADMIN\indexLOGIN.HTML");
	}
		die($conex);
}
?>