<?php 
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

        <form action="../FuncionesPHP/GuardarDireccion.php" method="POST">
    
            <div class="row">
    
                <div class="col">
    
                    <h3 class="title">Domicilio</h3>
    
              
                    <div class="inputBox">
                        <span>Nombre Completo:</span>
                        <input type="text" placeholder="Nombres y Apellidos" name="nombres_domicilio" required>
                    </div>
                    <div class="inputBox">
                        <span>Numero de Telefono:</span>
                        <input placeholder="123 - 234 - 348 9" name="numerotel_domicilio" required>
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span>Calle:</span>
                            <input type="text" placeholder="Hidalgo" name="calle_domicilio" required>
                        </div>
                        <div class="inputBox">
                            <span>Numero Ext.</span>
                            <input type="text" placeholder="#120" name="numeroext_domicilio" required>
                        </div>

                        <div class="inputBox">
                            <span>Numero Int.</span>
                            <input type="text" placeholder="Opcional" name="numeroint_domicilio">
                        </div>
                    </div>

                    <div class="inputBox">
                        <span>Municipio:</span>
                        <input type="text" placeholder="Municipio" name="municipio_domicilio" required>
                    </div>
    
                    <div class="flex">
                        <div class="inputBox">
                            <span>Estado :</span>
                            <input type="text" placeholder="Mexico" name="estado_domicilio" required>
                        </div>
                        <div class="inputBox">
                            <span>C.P :</span>
                            <input type="text" placeholder="123 45" name="codigopostal_domicilio" required>
                        </div>
                    </div>

                    <div class="inputBox">
                        <span>Referencias:</span>
                        <textarea class="txtarea" name="referencias_domicilio" requierd></textarea>
                    </div>
    
                </div>
    
              
        
            </div>
    
            <button class="btnSig" name="btnAgregarDireccion">Siguiente</button>
    
        </form>
    
    </div> 
    
</body>
</html>

<?php 

}

else{


    header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");
}

?>

