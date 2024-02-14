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
            <form method="post" action="detail-product.php">
            <button type="submit" value="<?php echo $data['ContadorCat1'] ?>" name="btnDetalleProducto"> <?php echo $data['NombreCat1'] ?></button>

            
            </th>
            



            <th><img width="125px" height="100px" src="https://texanoautopartes.com/wp-content/uploads/FAR503-1.jpg" alt="img1"></th>
            <th>Filtro de aire sentra 2005</th>
            <th>$<?php echo $data['PrecioCat1'] ?></th>
            <th>15</th>
            <th><input type="number"></th>

        </tr>




<?php
    }
}

?>