<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');

if($conex){

    if (isset($_POST['btnEliminarVacante'])){
        $IdVacanteBorrar = $_POST['btnEliminarVacante'];

        $eliminar = "DELETE FROM vacantes WHERE id_Vacante = '$IdVacanteBorrar' ";
        $resultadoEliminar = mysqli_query($conex, $eliminar);

        if($resultadoEliminar){   

            ?><script> alert('La vacante se elimino de forma correcta'); 
             window.location.href = '../../IndexPHP/Capital-Humano.php';
            </script><?php
            
            exit(); 
        }
        else{

            
            ?><script> alert('Hubo un error al eliminar la vacante intentelo de nuevo.'); 
             window.location.href = '../../IndexPHP/Capital-Humano.php';
            </script><?php
            
            exit(); 

        }
    }
    else{
    
    }

}



?>