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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="../Scripts/ScriptIndexAdmin.js"></script>
    <link rel="stylesheet" href="/LOGYSCYCMX ADMIN/Administrador/IndexPHP/css-prueba.css">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li >
                    <a href="">
                        <span class="icon">
                            <i class='bx bx-cog'></i>
                        </span>
                        <span class="tittle">LogistycMX</span>
                    </a>
                </li>

                <li>
                    <a href="">
                        <span class="icon">
                            <i class='bx bx-objects-vertical-bottom'></i>
                        </span>
                        <span class="tittle">Resumen De Ventas</span>
                    </a>
                </li>


                <li>
                    <a href="/LOGYSCYCMX ADMIN/Administrador/IndexPHP/Gestion-productos.php">
                        <span class="icon">
                            <i class='bx bx-cog'></i>
                        </span>
                        <span class="tittle">Gestion De Productos</span>
                    </a>
                </li>


                <li>
                    <a href="">
                        <span class="icon">
                            <i class='bx bx-list-ol'></i>
                        </span>
                        <span class="tittle">Gestion de Pedidos</span>
                    </a>
                </li>


                <li>
                    <a href="/LOGYSCYCMX ADMIN/Administrador/IndexPHP/Capital-Humano.php">
                        <span class="icon">
                            <i class='bx bx-analyse'></i>
                        </span>
                        <span class="tittle">Capital Humano</span>
                    </a>
                </li>


                <li class="active">
                    <a href="/LOGYSCYCMX ADMIN/Administrador/IndexPHP/alta-admin.php" class="active">
                        <span class="icon">
                            <i class='bx bx-user'></i>
                        </span>
                        <span class="tittle">Cuentas</span>
                    </a>
                </li>


                <li>
                    <a href="">
                        <span class="icon">
                            <i class='bx bxs-offer'></i>
                        </span>
                        <span class="tittle">Gestion De Descuentos</span>
                    </a>
                </li>

                <li>
                    <form action="\LOGIN-REGISTRO\FuncionesPHP\Cerrar_Sesion.php">
                        <button type="submit">
                            <span class="icon">
                                <i class='bx bx-log-out-circle'></i>
                            </span>
                            <span class="tittle">Cerrar Sesion</span>
                        </button>
                    </form>
                </li>

            </ul>
        </div>


        <div class="main">
            <div class="topbar"></div>

            <form method="POST" action="\LOGYSCYCMX ADMIN\Administrador\FuncionesPHP\CuentasUsuario\GuardarCuentaUsuario.php">
    
                <h1>Alta de clientes</h1>

                <input type="text" placeholder="Nombre(s)" name="nombre_user">
            
                <input type="text" placeholder="Apellidos" name="apellidos_user">

                <input type="email" placeholder="Correo Electronico" name="email_user">
            
                <input type="password" placeholder="Contraseña" name="contra_user">
            
                <input type="password" placeholder="Confirmar contraseña">
                
                <input type="text" placeholder="Telefono" name="telefono_user">
                
                
                <button type="submit" name="BtnRegistrar">Crear</button>
            </form>

            <br><br><br>

            <div class="main2AltaAdmin" id="main2">


                <form action="\LOGYSCYCMX ADMIN\Administrador\FuncionesPHP\CuentasAdmin\addAdmin.php" method="post" name="addAdmin">
                    <h1>Alta de Administradores</h1>
                    
                    <label>Nombre(s)</label>
                    <input type="text" name="Nombre" required>
                   
                    <label>Apellidos</label>
                    <input type="text" name="Apellido"  required>
                   
                    <label>Correo Electronico</label>
                    <input type="email" name="Correo"  required>
                    
                    <label>Contraseña</label>
                    <input type="password" name="Password" required>

                    <label>Numero de telefono</label>
                    <input type="number" name="telefono"  required>

                   

                    <input type="submit" name="submitAdmin" value="Crear Administrador">
                </form>
            </div>

            <h1>Cuentas de clientes</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Categoria</th>
                        <th>Fecha creacion</th>
                    </tr>
                </thead>


                <tbody>

                <?php
                    include("..\FuncionesPHP\CuentasUsuario\GeneradorCuentasClientes.php");
                ?>

                </tbody>
            </table>   


            <br><br><br>

            <h1>Cuentas de Administradores</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Creador</th>
                        <th>Fecha creacion</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                    include("..\FuncionesPHP\CuentasAdmin\GeneradorCuentasAdmin.php");
                ?>
                </tbody>
            </table>
        </div>




   


</body>
</html>

<?php 

}

else{


    header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");
}

?>