<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');

session_start();
$CorreoUsuario = $_SESSION['CorreoIngreso']; 
$hash_buscadorCorreoUsuario = hash('sha256', $CorreoUsuario);

$sql = mysqli_query($conex, "SELECT * FROM carrito WHERE Correousuario_Carrito='$hash_buscadorCorreoUsuario'");
$result = mysqli_num_rows($sql);
if ($result > 0) {
    
    while ($data = mysqli_fetch_array($sql)) {
        $NombreProducto_Carrito = $data ["NombreProducto_Carrito"];
        $PrecioProducto_Carrito = $data ["PrecioProducto_Carrito"];
        $CantidadProducto_Carrito = $data ["cantidadProductos_Carrito"];
        $subTOTAL = $CantidadProducto_Carrito * $PrecioProducto_Carrito;

        
?>
        <tr>
            <td><button>Eliminar</button></td>
            <td><img src="https://mundorepuesto.com/imgparts/parts/DOR/1591166.jpg" alt=""></td>
            <td><?php echo $NombreProducto_Carrito;?></td>
            <td>$<?php echo $PrecioProducto_Carrito;?></td>
            <td><input type="number" value="<?php echo $CantidadProducto_Carrito;?>"></td>
            <td>$<?php echo $subTOTAL; ?></td>
        </tr>
<?php

    }
}else{
    ?>

    <tr>
        <th colspan="6">No hay productos en tu carrito</th>
     
    </tr>

    <?php
}

?>