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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/paginaprincipal.css">
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/CSS/User-dropDown.css">
    <script src="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/Scripts/paginaprincipal.js"></script>
</head>

<body>
<section id="header" class="header">
        <a href="#"><img src="" class="logo" alt="Logo"></a>

        <div class="Navbar">
            <li><a class="active" href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/paginaprincipal.php">Inicio</a></li>
            <li><a  href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/shopping.php">Tienda</a></li>
            <li><a  href="/LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/cart.php"><i class="fa-solid fa-cart-shopping" style="color: #CA0101;"></i></a></li>

            
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
    <section id="hero">
        <h4>Preventa</h4>
        <h2>Precios especiales</h2>
        <h1>En nuestros nuevos productos</h1>
        <p style="color: white;">Compra o contactanos para que seas parte de LOGISTYCMX</p>
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

        <h2>Nuestros Productos</h2>
        <p>Todo lo que necesites en un click</p>

    </section>


</body>

</html>

<?php 

}

else{

    header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");
}

?>