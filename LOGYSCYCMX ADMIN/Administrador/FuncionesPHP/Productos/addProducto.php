<?php
// Include the database connection file
$directorioActual = dirname(__DIR__);
$rutaCompleta = $directorioActual;
$componentesRuta = explode('\\', $rutaCompleta);
$rutaRecortada = implode('\\', array_slice($componentesRuta, 0, 4));
include ($rutaRecortada . "\CONEXION\conexion.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$nomProd = mysqli_real_escape_string($conex, $_POST['NombreCat1']);
	$descripcion = mysqli_real_escape_string($conex, $_POST['descripcion']);
	$precioCat1 = mysqli_real_escape_string($conex, $_POST['PrecioCat1']);

	
	// Check for empty fields
	if (empty($nomProd) || empty($descripcion) || empty($precioCat1)) {
		if (empty($nomProd)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($descripcion)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}	
		if (empty($precioCat1)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}	
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($conex, "INSERT INTO  productocat1 (`NombreCat1`, `descripcion`,`PrecioCat1`) VALUES ('$nomProd', '$descripcion', '$precioCat1')");
		
		header ("Location: $directorioActual \LOGYSCYCMX ADMIN\indexLOGIN.HTML");
	}
	close($conex);
}
?>