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

        <div class="pro">

        <form method="post" action="detail-product.php?ID_P=<?php echo $data['ContadorCat1']?>">

        <button type="submit" value="<?php echo $data['ContadorCat1'] ?>" name="btnDetalleProducto">
            <img src="https://texanoautopartes.com/wp-content/uploads/FAR503-1.jpg" alt="img1">
            <div class="des">
                <span><?php echo $data['Marca'] ?></span>
                <h5><?php echo $data['NombreCat1'] ?></h5>
                <h4>$<?php echo $data['PrecioCat1'] ?></h4>
                <h4><?php echo $data['ContadorCat1'] ?></h4>
            </div>

            </button>

    </form>


            <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
        </div>

<?php
    }
}

?>