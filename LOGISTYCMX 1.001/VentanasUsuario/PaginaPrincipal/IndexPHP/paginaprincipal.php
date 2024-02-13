<?php

use LDAP\Result;

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/paginaprincipal.css">
</head>

<body>
    <section id="header">
        <a href="#"><img src="" class="logo" alt="Logo"></a>

        <div id="Navbar">
            <li><a class="active" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/paginaprincipal.php">Inicio</a></li>
            <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/shopping.php">Tienda</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Nosotros</a></li>
            <li><a href="">Contactanos</a></li>
            <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/cart.php"><i class="fa-solid fa-cart-shopping" style="color: #CA0101;"></i></a></li>
        </div>
    </section>

    <section id="hero">
        <h4>Preventa</h4>
        <h2>Precios especiales</h2>
        <h1>En nuestros nuevos productos</h1>
        <p>compra o contactanos para que seas parte de LOGISTYCMX</p>
        <button>Compra ahora</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="" alt="Offers">
            <h6>Ofertas</h6>
        </div>
        <div class="fe-box">
            <img src="" alt="Offers">
            <h6>Preventas</h6>
        </div>
        <div class="fe-box">
            <img src="" alt="Offers">
            <h6>Unete</h6>
        </div>
        <div class="fe-box">
            <img src="" alt="Offers">
            <h6>Mayoristas</h6>
        </div>

    </section>


    <section id="product1" class="section-p1">
        <h2>Nuestros Productos</h2>
        <p>Todo lo que necesites en un click</p>
        <div class="pro-container">

            <?php

            $sql = mysqli_query($conex, "SELECT * FROM productocat1");
            $result = mysqli_num_rows($sql);
            if ($result > 0) {
                
                while ($data = mysqli_fetch_array($sql)) {
            ?>

                    <div class="pro">
                        <img src="https://texanoautopartes.com/wp-content/uploads/FAR503-1.jpg" alt="img1">
                        <div class="des">
                            <span><?php echo $data['Marca'] ?></span>
                            <h5><?php echo $data['NombreCat1'] ?></h5>
                            <h4>$<?php echo $data['PrecioCat1'] ?></h4>
                        </div>
                        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></i></a>
                    </div>

            <?php
                }
            }

            ?>

        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Registrate para nuevas noticias</h4>
            <p>Ingresa tu correo para actualizaciones <span>especiales</span></p>

        </div>
        <div class="form">
            <input type="text" placeholder="Tu correo Electronico">
            <button class="normal">Registrate</button>
        </div>

    </section>
</body>

</html>