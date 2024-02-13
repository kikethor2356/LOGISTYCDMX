<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');
        



if (isset($_POST['btnAltaVacante'])) {
	
	$nomVacante = mysqli_real_escape_string($conex, $_POST['FiedlNombreVacante']);
	$DescripcionVacante = mysqli_real_escape_string($conex, $_POST['FieldDescripcionVacante']);
    $fecha = date("y-m-d");
	
	if (empty($nomVacante) || empty($DescripcionVacante) || empty($fecha) ) {
		if (empty($nomVacante)) {
			echo "<font color='red'>ERROR Nombre de la vacante vacio.</font><br/>";
		}
		
		if (empty($DescripcionVacante)) {
			echo "<font color='red'>ERROR Descripcion de la vacante esta vacio.</font><br/>";
		}	
		
	} else { 
		$result = mysqli_query($conex, "INSERT INTO  vacantes (`Nombre_Vacante`, `Descripcion_Vacante`, `FechaSubia_Vacante`) VALUES ('$nomVacante', '$DescripcionVacante', '$fecha')");
		
		header ("Location: $document_root\LOGYSCYCMX ADMIN\Administrador\IndexPHP\indexADMIN.php");
	}
		die($conex);
}
?>