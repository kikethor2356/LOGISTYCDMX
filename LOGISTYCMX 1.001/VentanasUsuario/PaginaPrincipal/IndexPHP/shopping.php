<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/paginaprincipal.css">
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/shop.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="" class="logo" alt="Logo"></a>

        <div id="Navbar">
            <li><a  href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/paginaprincipal.php">Inicio</a></li>
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


    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/detail-product.php';">
                <img src="https://texanoautopartes.com/wp-content/uploads/FAR503-1.jpg" alt="img1">
                <div class="des">
                    <span>Toyota</span>
                    <h5>Faro izquierdo</h5>
                    <h4>$2499</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></i></a>
            </div>
            <div class="pro">
                <img src="https://texanoautopartes.com/wp-content/uploads/FAR503-1.jpg" alt="img1">
                <div class="des">
                    <span>Toyota</span>
                    <h5>Faro izquierdo</h5>
                    <h4>$2499</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></i></a>
            </div>
            <div class="pro">
                <img src="https://texanoautopartes.com/wp-content/uploads/FAR503-1.jpg" alt="img1">
                <div class="des">
                    <span>Toyota</span>
                    <h5>Faro izquierdo</h5>
                    <h4>$2499</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></i></a>
            </div>
            <div class="pro">
                <img src="https://texanoautopartes.com/wp-content/uploads/FAR503-1.jpg" alt="img1">
                <div class="des">
                    <span>Toyota</span>
                    <h5>Faro izquierdo</h5>
                    <h4>$2499</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart" ></i></i></a>
            </div>
        </div>
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