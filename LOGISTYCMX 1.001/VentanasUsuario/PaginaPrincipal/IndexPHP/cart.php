<?php


error_reporting(E_ALL & ~E_NOTICE);
session_start();







if($_SESSION['CorreoIngreso']){
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/paginaprincipal.css">
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/cart.css">
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/shop.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="" class="logo" alt="Logo"></a>

        <div id="Navbar">
            <li><a  href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/paginaprincipal.php">Inicio</a></li>
            <li><a  href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/shopping.php">Tienda</a></li>
            <li><a class="active" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/cart.php"></a><i class="fa-solid fa-cart-shopping" style="color: #CA0101;"></i></a></li>
            <li><a href="" class="User"><i class="fa-solid fa-user"></i></a></li>
        </div>
    </section>

    <section id="page-header">
        <h2>Nuestros Productos</h2>
        <p>Precios especiales para clientes con lealtad</p>
        
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
        <thead>
        <tr>
        <td>Eliminar</td>
        <td>Imagen</td>
        <td>Producto</td>
        <td>Precio</td>
        <td>Cantidad</td>
        <td>Subtotal</td>
        </tr>
        </thead>

        <tbody>
        <?php 
        include("..\FuncionesPHP\GeneradorListaCarrito.php");
        ?>
        
        </tbody>
        </table>
        </section>
  
        <section id="cart-add"  class="section-p1">
            <div id="subtotal">
                <h3>TOTAL</h3>
                <table>
                <tr>
                <td>Subtotal</td>
                <td> $<?php echo $SubTotalTODO; ?></td>
                </tr>
                <tr>
                <td>Envio</td>
                <td>GRATIS</td>
                </tr>
                <tr>
                <td><strong>Total</strong></td>
                <td><strong>$ <?php $TotalTODO = $SubTotalTODO; echo $TotalTODO; ?></strong></td>
                </tr>
                </table>
            </div>
            <button class="Btn_ctn" onclick="window.location.href='Envios.php'">Continuar Compra</button>
        </section>

        
</body>
</html>

<?php 

}

else{


    header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");
}

?>