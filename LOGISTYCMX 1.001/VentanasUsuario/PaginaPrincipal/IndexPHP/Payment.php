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
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/payment.css">
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

    <div class="container">

        <form action="">
    
            <div class="row">
    
                
                <div class="col">
    
                    <h3 class="title">Metodos de Pago</h3>
    
                    <div class="inputBox">
                        <span>Metodos de pago</span>
                        <img src="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/images/card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>Nombre Tarjeta Hambiente:</span>
                        <input type="text" placeholder="mr. john">
                    </div>
                    <div class="inputBox">
                        <span>Numero de Tarjeta:</span>
                        <input type="number" placeholder="1111-2222-3333-4444">
                    </div>
                   
    
                    <div class="flex">
                        <div class="inputBox">
                            <span>Mes:</span>
                            <input type="text" placeholder="Enero">
                        </div>
                        <div class="inputBox">
                            <span>Año :</span>
                            <input type="number" placeholder="2022">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="123">
                        </div>
                    </div>
    
                </div>
        
            </div>
    
            <input type="submit" value="Enviar" class="submit-btn">
    
        </form>
    
    </div> 
    
</body>
</html>

