<?php 
$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');

if($conex){

    if (isset($_POST['btnEliminarCarrito'])){
        $IdCarritoBorrar = $_POST['btnEliminarCarrito'];

        $eliminar = "DELETE FROM carrito WHERE id_Carrito = '$IdCarritoBorrar' ";
        $resultadoEliminar = mysqli_query($conex, $eliminar);

        if($resultadoEliminar){

            //Se elimino
           // header ("Location: $document_root\LOGYSCYCMX ADMIN\Administrador\IndexPHP\indexADMIN.php");
        }
        else{

            //NO Se elimino
           // header ("Location: $document_root\LOGYSCYCMX ADMIN\Administrador\IndexPHP\indexADMIN.php");

        }
    }
    else{
    
    }

}

?>