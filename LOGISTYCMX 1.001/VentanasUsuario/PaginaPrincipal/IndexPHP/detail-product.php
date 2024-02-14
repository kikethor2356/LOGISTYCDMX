<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');

if ($conex){

    if (isset($_POST['btnDetalleProducto'])) {

        $IDbuscarProducto = trim($_POST['btnDetalleProducto']);

        $consulta = "SELECT * FROM productocat1 WHERE ContadorCat1='$IDbuscarProducto'";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){
    
                while ($row = $resultado->fetch_array()){
                        $Nombre_Producto = $row["NombreCat1"];
                        $Descripcion_Producto = $row["descripcion"];
                        $PrecioCat1_Producto = $row["PrecioCat1"];
                        $Marca_Producto = $row["Marca"];
                
    
                }
            }
        }

    }    
   
?>

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



   <section id="prodetails" class="section-p1">
    <div class="single-pro-image">

        <img src="https://mundorepuesto.com/imgparts/parts/DOR/1591166.jpg" width="100%" id="MainImg" alt="main">
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="https://m.media-amazon.com/images/I/81h8qHAIESL.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="https://m.media-amazon.com/images/I/71OmmtV1FoL.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="https://m.media-amazon.com/images/I/814MF6HWNGL._AC_UF894,1000_QL80_.jpg" width="100%" class="small-img" alt="">
            </div>
            
        </div>
    </div>

    <div class="single-pro-details">
        <h6>Inicio/ Faro</h6>
        <h4><?php echo $Nombre_Producto; ?></h4>
        <h2>$<?php echo $PrecioCat1_Producto; ?></h2>

        <input type="number" value="1" min="1">
        <button class="normal">Añadir al carrito</button>

        <h4>Descripcion del producto</h4>
        <span>
        <?php echo $Descripcion_Producto; ?>
        </span>

        <h4>Marca del producto</h4>
        <span><?php echo $Marca_Producto; ?></span>
    </div>
   </section>

   <section id="product1" class="section-p1">
    <h2>Nuestros Productos</h2>
    <div class="pro-container">
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


    <script>
        var MainImg = document.getElementById("MainImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick =function(){
            MainImg.src = SmallImg[0].src;
        }

        SmallImg[1].onclick =function(){
            MainImg.src = SmallImg[1].src;
        }

        SmallImg[2].onclick =function(){
            MainImg.src = SmallImg[2].src;
        }

        SmallImg[3].onclick =function(){
            MainImg.src = SmallImg[3].src;
        }
    </script>
</body>
</html>