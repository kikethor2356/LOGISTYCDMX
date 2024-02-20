<?php


if (isset($_FILES['archivo'])){

	$directorioActual = dirname(__DIR__);
	$document_root = $_SERVER['DOCUMENT_ROOT'];
	$document_root1 = $_SERVER['DOCUMENT_ROOT'];
	include($document_root . '\CONEXION\conexion.php');

	extract($_POST);
	$nombre_vacante = $_POST['FieldNombreVacante'];
	$descripcion_vacante = $_POST['FieldDescripcionVacante'];
	$fechaActual = date("Y-m-d");
	$document_root1 = str_replace('\\', '/', $document_root1);
	$carpeta_destino= $document_root1."/LOGISTYCMX 1.001/VentanasUsuario/Vacantes/ArchivosVacantes/";

	$nombre_archivo = basename($_FILES["archivo"] ["name"]);
	$extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

	if (move_uploaded_file($_FILES['archivo'] ['tmp_name'], $carpeta_destino . $nombre_archivo)){
		include($document_root . '\CONEXION\conexion.php');
		$sql = "INSERT INTO vacantes (Nombre_Vacante, Archivo_Vacante, Descripcion_Vacante, FechaSubia_Vacante) VALUES ('$nombre_vacante', '$nombre_archivo', '$descripcion_vacante', '$fechaActual')";
		$resultado = mysqli_query($conex, $sql);
		if ($resultado){
			
			?><script> alert('Se agrego la vacante de forma correcta'); 
			window.location.href = '../../IndexPHP/Capital-Humano.php';
		   </script><?php
		   
		   exit(); 

		}
		else{
			?><script> alert('Hubo un error al guardar la vacante'); 
			window.location.href = '../../IndexPHP/Capital-Humano.php';
		   </script><?php
		   
		   exit(); 
		}

		
	}


}else{
	echo "valio cono";
}

        


?>