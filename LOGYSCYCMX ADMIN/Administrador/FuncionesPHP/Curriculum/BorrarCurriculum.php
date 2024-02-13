<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');

if($conex){

    if (isset($_POST['btnCurriculumBorrar'])){
        $IdCurriculumBorrar = $_POST['btnCurriculumBorrar'];
        echo $IdCurriculumBorrar;

        $eliminar = "DELETE FROM curriculum WHERE Contador = '$IdCurriculumBorrar' ";
        $resultadoEliminar = mysqli_query($conex, $eliminar);

        if($resultadoEliminar){

            //Se elimino
            header ("Location: $document_root\LOGYSCYCMX ADMIN\Administrador\IndexPHP\indexADMIN.php");
        }
        else{

            //NO Se elimino
            header ("Location: $document_root\LOGYSCYCMX ADMIN\Administrador\IndexPHP\indexADMIN.php");

        }
    }
    else{
    
    }

}



?>