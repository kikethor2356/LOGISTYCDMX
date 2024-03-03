<?php


use LDAP\Result;
'<link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/shop.css">'; 
'<link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/shop.css">';
        
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

        <button style="cursor:pointer;" type="submit" value="<?php echo $data['ContadorCat1'] ?>" name="btnDetalleProducto">
            <img src="https://texanoautopartes.com/wp-content/uploads/FAR503-1.jpg" alt="img1">
            <div class="des" >
                <span><?php echo $data['Marca'] ?></span>
                <h5><?php echo $data['NombreCat1'] ?></h5>
                <h4>$<?php echo $data['PrecioCat1'] ?></h4>
                
            </div>

            </button>

    </form>


    <form  method="post" action="../FuncionesPHP/AnadirCarritoDESDEcuadricula.php">
        <input type="hidden" name="hiddenNombreProducto" value="<?php echo $data['NombreCat1'] ?>">
        <input type="hidden" name="hiddenPrecioProducto" value="<?php echo $data['PrecioCat1'] ?>">
        <input type="number" name='CantidadProductosCarrito'>
        <button  type="submit" style="cursor:pointer;"; class="fa-solid fa-cart-shopping cart" name="btnAnadirCarritoCuadricula" value="<?php echo $data['ContadorCat1']?>"></button>
    </form>    


            
        </div>

<?php
    }
}

?>