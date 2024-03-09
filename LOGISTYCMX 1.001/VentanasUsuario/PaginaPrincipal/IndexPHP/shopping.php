
<?php




use LDAP\Result;

session_start();

if($_SESSION['CorreoIngreso']){

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
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/User-dropDown.css">
    <script src="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/Scripts/Shopping.js"></script>
    

</head>

<body>
    <section id="header" class="header">
        <a href="#"><img src="" class="logo" alt="Logo"></a>

        <div class="Navbar">
            <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/paginaprincipal.php">Inicio</a></li>
            <li><a class="active" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/shopping.php">Tienda</a></li>
            <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/cart.php"><i class="fa-solid fa-cart-shopping" style="color: #CA0101;"></i></a></li>

            
        </div>

        <div class="search-container">
        <form action="" method="">
            <input type="text" class="search-box" name="" placeholder="Buscar...">
            <button type="submit" class="search-button"><i class="fa-solid fa-magnifying-glass fa-2x" style="color: #ca0101;"></i></button>
        </form>
    </div>

        <div class="profile-dropdown">
        <div onclick="toggle()" class="profile-dropdown-btn">
          <div class="profile-img">
            <i class="fa-solid fa-user"></i>
          </div>

          <span
            >Usuario
            <i class="fa-solid fa-angle-down"></i>
          </span>
        </div>

        <ul class="profile-dropdown-list">
          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-solid fa-truck"></i>
              Pedidos
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-regular fa-credit-card"></i>
              Metodos de Pago
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-solid fa-location-dot"></i>
              Direcciones
            </a>
          </li>

          <li class="profile-dropdown-list-item">
            <a href="#">
              <i class="fa-solid fa-sliders"></i>
              Configuracion
            </a>
          </li>

          
          <hr />

          <li class="profile-dropdown-list-item">
          <form action="\LOGIN-REGISTRO\FuncionesPHP\Cerrar_Sesion.php">
            <button>
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              Cerrar Sesion
            </button>
          </form>
          </li>
        </ul>
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

    

    <section id="tabla1">
       
        <table>

        <form method="post" action="../FuncionesPHP/CapturarPedidoTablaAcarrito.php">

            <button class="btn-cap" name="btnCapturarPedido">Capturar pedido</button>

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

        </form>

        </table>

        <?php ?>

    </section>

  



    

    <script src="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/Scripts/script.js"></script>  
</body>

</html>

<?php 

}

else{

    header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");
}

?>