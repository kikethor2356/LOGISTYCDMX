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
                        <span class="tittle">Clientes</span>
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
                    <a href="">
                        <span class="icon">
                            <i class='bx bx-log-out-circle'></i>
                        </span>
                        <span class="tittle">Cerrar Sesion</span>
                    </a>
                </li>

            </ul>
        </div>


        <div class="main">
            <div class="topbar"></div>

            <div class="main2AltaAdmin" id="main2">


                <form action="\LOGYSCYCMX ADMIN\Administrador\FuncionesPHP\CuentasAdmin\addAdmin.php" method="post" name="addAdmin">
                    <h1>Alta de Administradores</h1>
                    
                    <label>Nombre(s)</label>
                    <input type="text" name="Nombre" required>
                   
                    <label>Apellidos</label>
                    <input type="text" name="Apellido"  required>
                   
                    <label>Correo Electronico</label>
                    <input type="text" name="Correo"  required>
                    
                    <label>Contraseña</label>
                    <input type="password" name="Password" required>
                   

                    <input type="submit" name="submitAdmin" value="Crear Administrador">
                </form>
            </div>
        </div>
    </div> 


   


</body>
</html>