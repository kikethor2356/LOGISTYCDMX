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


                <li class="active">
                    <a href="/LOGYSCYCMX ADMIN/Administrador/IndexPHP/Capital-Humano.php" class="active">
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

            <div class="main5vacantes" id="main5">

        <div class="container1">
            <form class="mainForm" method="post" action="\LOGYSCYCMX ADMIN\Administrador\FuncionesPHP\Vacantes\GuardarVacante.php" enctype="multipart/form-data">
                <h1>Curriculum</h1>

                <label>Nombre de la vacante</label>
                <input type="text" name="FieldNombreVacante">
       

       
                <label>Descripcion</label>
                <input type="text" name="FieldDescripcionVacante">
        

                <input type="file" name="archivo" id="archivo" >
        
                <input type="submit" name="btnAltaVacante" value="Subir Vacante">
            </form>
        </div>
            

            <div class="main4curriculum" id="main4">
                <div class="contenedorCurriculums">
                    <table class="tablaCurriculums">
                        <thead>
                            <tr>
                                <th class="curri">Curriculums</th>
                            </tr>
                        </thead>


                        <tbody>

                            <?php
                            ?>
                            <form method="post" action="\LOGYSCYCMX ADMIN\Administrador\IndexPHP\IndexMostrarCurricuIndividual.php">

                                <?php
                                include("..\FuncionesPHP\Curriculum\MostrarSolicitudesEmpleo.php");
                                ?>

                            </form>

                        </tbody>

                    </table>



                </div>

            </div>


            

                
                <div class="tabla-vacantes">
                    <table>
                        <thead>
                            <tr>
                                <th>N</th>
                                <th>vacante</th>
                                <th>Descripcion</th>
                                <th>Fecha alta</th>

                            <tr>
                        </thead>


                        <tbody>
                         <?php
                         include("..\FuncionesPHP\Vacantes\GenerarTablaVacantes.php");
                         ?>
                        </tbody>

                    </table>
                </div>
                
            </div>
            
        </div>


    </div> 


   


</body>
</html>

<?php 

}

else{


    header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");
}

?>