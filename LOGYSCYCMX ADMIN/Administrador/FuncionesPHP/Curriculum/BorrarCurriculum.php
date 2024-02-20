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
            ?><script> alert('El curriculum se elimino correctamente.'); 
            window.location.href = '../../IndexPHP/Capital-Humano.php';
           </script><?php
           
           exit(); 
        }
        else{

            //NO Se elimino
            ?><script> alert('Hubo un error al borrar el curriculum intentelo de nuevo.'); 
            window.location.href = '../../IndexPHP/Capital-Humano.php';
           </script><?php
           
           exit(); 

        }
    }
    else{
    
    }

}



?>