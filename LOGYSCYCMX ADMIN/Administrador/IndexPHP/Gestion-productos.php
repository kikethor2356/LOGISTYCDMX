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

                <li >
                    <a href="">
                        <span class="icon">
                            <i class='bx bx-objects-vertical-bottom'></i>
                        </span>
                        <span class="tittle">Resumen De Ventas</span>
                    </a>
                </li>


                <li class="active">
                    <a href="/LOGYSCYCMX ADMIN/Administrador/IndexPHP/Gestion-productos.php" class="active">
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


                <li>
                    <a href="/LOGYSCYCMX ADMIN/Administrador/IndexPHP/alta-admin.php">
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
            <div class="topbar">
               
            </div>

            <div class="main1AltaProducto" id="main1">
                
                
                <form action="\LOGYSCYCMX ADMIN\Administrador\FuncionesPHP\Productos\addProducto.php" method="post" name="add">
                    <h1>Alta de producto</h1>

                        <label>Nombre del Producto</label>
                        <input type="text" name="NombreCat1" required>
                        
                        <label>Descripción del Producto</label>
                        <input type="text" name="descripcion" required>
                       
                        <label>Precio del Producto</label>
                        <input type="text" name="PrecioCat1" required>

                    
                    
                        <label>Codigo de segundo reconocimiento</label>
                        <input type="text" name="AmarreAldo" required>
                        

                        <label>Numero de Serie</label>
                        <input type="text" name="NumSerie" required>

                        <label>Existencia</label>
                        <input type="number" name="Existencia" required>
                        
                       
                        <label for="marca">Selecciona una marca de carro:</label>
                        <select id="marca" name="Marca">
                            <option value="Toyota">Toyota</option>
                            <option value="Honda">Honda</option>
                            <option value="Ford">Ford</option>
                            <option value="Chevrolet">Chevrolet</option>
                            <option value="Volkswagen">Volkswagen</option>
                            <option value="Nissan">Nissan</option>
                            <option value="BMW">BMW</option>
                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                            <option value="Audi">Audi</option>
                            <option value="Hyundai">Hyundai</option>
                            <option value="Kia">Kia</option>
                            <option value="Mazda">Mazda</option>
                            <option value="Subaru">Subaru</option>
                            
                        </select>

                        
                        <label for="Imagen">Portada</label>
                        <input type="file" name="Imagen" style="width: 40%;" required>
                        
                    
                    
        
                    

                    <input type="submit" name="submit" value="Dar de alta">
                </form>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>ID</th>
                            <th>Existencia</th>
                            <th>Amarre Aldo</th>
                            <th>Numero de serie</th>
                            <th>Marca</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                    include("..\FuncionesPHP\Productos\GeneradorTablaProductos.php");
                    ?>
                    </tbody>
                </table>


        </div> 


   


</body>
</html>

<?php 

}

else{


    header ("Location: $document_root\Errores\IndexNoSesion.php");
}

?>