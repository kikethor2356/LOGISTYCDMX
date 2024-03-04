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
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/User-dropDown.css">
    
</head>
<body>
<section id="header" class="header">
        <a href="#"><img src="" class="logo" alt="Logo"></a>

        <div class="Navbar">
            <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/paginaprincipal.php">Inicio</a></li>
            <li><a  href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/shopping.php">Tienda</a></li>
            <li><a class="active" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/cart.php"><i class="fa-solid fa-cart-shopping" style="color: #CA0101;"></i></a></li>

            
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
            <a href="#">
              <i class="fa-solid fa-arrow-right-from-bracket"></i>
              Cerrar Sesion
            </a>
          </li>
        </ul>
      </div>
    
      <script>
    let profileDropdownList = document.querySelector(".profile-dropdown-list");
let btn = document.querySelector(".profile-dropdown-btn");

let classList = profileDropdownList.classList;

const toggle = () => classList.toggle("active");

window.addEventListener("click", function (e) {
  if (!btn.contains(e.target)) classList.remove("active");
});

  </script>

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

            <?php 
            

                $Usuario = $_SESSION['CorreoIngreso'];
                $consulta1="SELECT * FROM domicilio WHERE Usuario_Domicilio = '$Usuario'";
                $resultado1=mysqli_query($conex,$consulta1);
                $filas1=mysqli_num_rows($resultado1);

                ////////////////////////

                $consulta2="SELECT * FROM tarjeta_pago WHERE Propietario_Tarjeta = '$Usuario'";
                $resultado2=mysqli_query($conex,$consulta2);
                $filas2=mysqli_num_rows($resultado2);

                if($filas1 && $filas2)
                {
                    echo "Ya agrego domicilio y tarjeta";
                    $IndexRedirigido = "CheckCompra.php";
                }else{

                    if($filas1){
                        echo "Ya agrego domicilio";
                        $IndexRedirigido = "Payment.php";
                    }
                    else if($filas2){
                        echo "Ya agrego tarjeta";
                        $IndexRedirigido = "Envios.php";
                    }
                    else{
                        echo "No tiene nada agregado";
                        $IndexRedirigido = "Envios.php";
                    }
                    
                }
                
                


            ?>



            <button class="Btn_ctn" onclick="window.location.href='<?php echo $IndexRedirigido; ?>'">Continuar Compra</button>
        </section>


</body>
</html>

<?php 

}

else{


    header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");
}

?>