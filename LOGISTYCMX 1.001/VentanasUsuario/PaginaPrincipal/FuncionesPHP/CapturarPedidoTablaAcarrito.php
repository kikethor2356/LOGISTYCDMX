<?php 

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');



if($conex){

    if (isset($_POST['btnCapturarPedido'])){

        $IDbtnProducto = $_POST['IDproductoCarrito'];
        $CantidadProducto = $_POST['inputCantidadProducto'];
        $NombreProducto = $_POST['NombreProductoCarrito'];
        $PrecioProducto = $_POST['PrecioProductoCarrito'];
        

        session_start();
        $CorreoUsuario = $_SESSION['CorreoIngreso']; 
        $hash_CorreoUsuario = hash('sha256', $CorreoUsuario);

        echo $IDbtnProducto . '<br><br>' . $NombreProducto;
/*

        $consulta = "INSERT INTO carrito (Correousuario_Carrito, IDproducto_Carrito, cantidadProductos_Carrito, NombreProducto_Carrito, PrecioProducto_Carrito)
        VALUES('$hash_CorreoUsuario', '$IDbtnProducto', '$CantidadProducto','$NombreProducto', '$PrecioProducto')";

        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {

            header ("Location: $document_root\LOGISTYCMX 1.001\PaginaPrincipal\detail-product.php\detail-product.php");
            
       
        } else {
        
        }*/

    }

}

?>