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
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/shop.css">
    <script src="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/Scripts/Shopping.js"></script>

</head>

<body>
    <section id="header">
        <a href="#"><img src="" class="logo" alt="Logo"></a>

        <div id="Navbar">
            <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/paginaprincipal.php">Inicio</a></li>
            <li><a class="active" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/shopping.php">Tienda</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Nosotros</a></li>
            <li><a href="">Contactanos</a></li>
            <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/cart.php"><i class="fa-solid fa-cart-shopping" style="color: #CA0101;"></i></a></li>
        </div>
    </section>

    <section id="page-header">
        <h2>Nuestros Productos</h2>
        <p>Precios especiales para clientes con lealtad</p>

    </section>

    <section>
        <br>
    <button onclick="MostrarLista()" class="btnlis"><i class="fa-solid fa-list-ul fa-3x" style="color: #000000;"></i></button>
    <button onclick="MostrarCuadricula()" class="btncua"><i class="fa-solid fa-border-all fa-3x" style="color: #000000; font-size: 300%; width: -10%; left: 0%"></i></button>
    </section>    


    <section id="product1" class="section-p1" style="display: none;">
        <div class="pro-container">

        <?php  include("..\FuncionesPHP\GeneradorCuadricula.php"); ?>
        </div>
    </section>


    <section style="display: block;" id="tabla1">

        <table>

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Foto</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                    <th>Cantidad</th>
                </tr>
            </thead>


            <tbody>
                <?php  include("..\FuncionesPHP\GeneradorTabla.php"); ?>
            </tbody>



        </table>

        <?php ?>

    </section>




    <section id="pagination" class="section-p1">
        <a href="">1</a>
        <a href="">2</a>
        <a href=""><i class="fa-solid fa-arrow-right"></i></i></a>
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