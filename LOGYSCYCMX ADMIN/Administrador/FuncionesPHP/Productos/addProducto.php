<?php
// Include the database connection file
$directorioActual = dirname(__DIR__);
$rutaCompleta = $directorioActual;
$componentesRuta = explode('\\', $rutaCompleta);
$rutaRecortada = implode('\\', array_slice($componentesRuta, 0, 5));
include ($rutaRecortada . "\CONEXION\conexion.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$nomProd = mysqli_real_escape_string($conex, $_POST['NombreCat1']);
	$descripcion = mysqli_real_escape_string($conex, $_POST['descripcion']);
	$precioCat1 = mysqli_real_escape_string($conex, $_POST['PrecioCat1']);
	$imagen = mysqli_real_escape_string($conex, $_POST['Imagen']);
	$numSerie = mysqli_real_escape_string($conex, $_POST['NumSerie']);
	$amarreAldo = mysqli_real_escape_string($conex, $_POST['AmarreAldo']);




	
	// Check for empty fields
	if (empty($nomProd) || empty($descripcion) || empty($precioCat1) || empty($imagen) || empty($numSerie) || empty($amarreAldo)) {
		if (empty($nomProd)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if (empty($descripcion)) {
			echo "<font color='red'>Descrition field is empty.</font><br/>";
		}	
		if (empty($precioCat1)) {
			echo "<font color='red'>Price field is empty.</font><br/>";
		}	
		if (empty($imagen)) {
			echo "<font color='red'>img field is empty.</font><br/>";
		}	
		if (empty($numSerie)) {
			echo "<font color='red'>Serie Number  field is empty.</font><br/>";
		}	
		if (empty($amarreAldo)) {
			echo "<font color='red'>Aldo field is empty.</font><br/>";
		}	
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($conex, "INSERT INTO productocat1 (`NombreCat1`, `PrecioCat1`, `descripcion`, `NumSerie`, `Imagen`, `AmarreAldo`)VALUES('$nomProd', '$precioCat1', '$descripcion', '$numSerie', '$imagen', '$amarreAldo')");
		
		header ("Location: LOGYSCYCMX ADMIN\indexADMIN.php");
	}
	die($conex);
}
?>