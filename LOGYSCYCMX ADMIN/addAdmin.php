<?php
// Include the database connection file
require ("CONEXION/conexion.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$nomAdm = mysqli_real_escape_string($conex, $_POST['Nombre']);
	$apellidoAdm = mysqli_real_escape_string($conex, $_POST['Apellido']);
	$correoAdm = mysqli_real_escape_string($conex, $_POST['Correo']);
	$passwordAdm = mysqli_real_escape_string($conex, $_POST['Password']);



	
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
		// If all the fields are filled (not empty) 

        header ("Location:indexADMIN.html");
		// Insert data into database
		$result = mysqli_query($conex, "INSERT INTO  Admin (`Nombre`, `Apellido`,`Correo`,`Password`) VALUES ('$nomAdm', '$apellidoAdm', '$correoAdm','$passwordAdm')");
		
		
	}
	
}
?>