<link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/paginaprincipal.css">

<?php
use LDAP\Result;

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');

$sql = mysqli_query($conex, "SELECT * FROM productocat1");
$result = mysqli_num_rows($sql);
if ($result > 0) {
    
    while ($data = mysqli_fetch_array($sql)) {
?>

        <tr>

            <th>
            
            <button  type="button" onclick="window.location.href='detail-product.php?ID_P=<?php echo $data['ContadorCat1']?>'"> <?php echo $data['NombreCat1'] ?> </button>
            
            </th>
            



            <th><img width="125px" height="100px" src="https://texanoautopartes.com/wp-content/uploads/FAR503-1.jpg" alt="img1"></th>
            <th>Filtro de aire sentra 2005</th>
            <th>$<?php echo $data['PrecioCat1'] ?></th>
            <th><?php echo $data['Existencia_Producto'] ?></th>
            <th><input type="number" name="inputCantidadProducto"></th>

            <input type="hidden" name="IDproductoCarrito" value="<?php echo $data['ContadorCat1']?>">
            <input type="hidden" name="NombreProductoCarrito" value="<?php echo $data['NombreCat1']?>">
            <input type="hidden" name="PrecioProductoCarrito" value="<?php echo $data['PrecioCat1']?>">

        

        </tr>




<?php
    }
}

?>