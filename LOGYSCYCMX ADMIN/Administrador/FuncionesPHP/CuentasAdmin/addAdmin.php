<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();







if($_SESSION['CorreoIngreso']){
$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');
        

//$rutaRecortada . "\CONEXION\conexion.php"

if (isset($_POST['submitAdmin'])) {
	// Escape special characters in string for use in SQL statement	
	$nomAdm = mysqli_real_escape_string($conex, $_POST['Nombre']);
	$apellidoAdm = mysqli_real_escape_string($conex, $_POST['Apellido']);
	$correoAdm = mysqli_real_escape_string($conex, $_POST['Correo']);
	$passwordAdm = mysqli_real_escape_string($conex, $_POST['Password']);
	$telefono = mysqli_real_escape_string($conex, $_POST['telefono']);
	


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
		
		// If all the fields are filled (not empty) 
		// Insert data into database
		$fecha = date("y-m-d");
		$creador = $_SESSION['CorreoIngreso'];
		$result = mysqli_query($conex, "INSERT INTO  Admin (`Nombre`, `Apellido`,`Correo`,`Password_Admin`,`Telefono_Admin`,`FechaCreacion_Admin`,`Creador_Admin`) VALUES ('$nomAdm', '$apellidoAdm', '$hash_correo_admin','$hash_contrasena_admin', '$telefono', '$fecha', '$creador')");
		
		?><script> alert('El administrador fue dado de alta de manera correcta'); 
		window.location.href = '../../IndexPHP/alta-admin.php';
	   </script><?php
	   
	   exit(); 
	}
		die($conex);
}

}

else{


    header ("Location: $document_root\Errores\IndexNoSesion.php");
}
?>