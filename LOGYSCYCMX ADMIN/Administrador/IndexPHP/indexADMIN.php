<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="../Scripts/ScriptIndexAdmin.js"></script>
    <link rel="stylesheet" href="../CSS/EstilosIndexAdmin.css"> 

</head>


<body>

    <header>

        <div class="header1">
             <button class="acclink">Cuenta</button>
             <button class="clslink">Cerrar Sesión</button>
        </div>

    </header>


    <section>
        <nav class="nav1">

            <div class="cajaNAV1"><img src="https://mir-s3-cdn-cf.behance.net/projects/404/17991703.548d45163e80e.png" style="position: absolute; width: 99.65%; height: 100%; border-right: 1.55px solid black"></div>


            <div class="cajaNAV2">

                <div class="DIVbtn1">
                    <button type="button" class="btn" onclick="mostrarmain1()">Alta de producto</button>
                </div>


                <div class="DIVbtn2">
                    <button class="btn" onclick="mostrarmain2()">Alta de administrador</button>
                </div>

                <div class="DIVbtn3">
                    <button class="btn" onclick="mostrarmain3()">Pedidos (prueba)</button>
                </div>

                <div class="DIVbtn4">
                    <button class="btn" onclick="mostrarmain4()">Solicitudes de empleo</button>
                </div>
                
            </div>

        </nav>

        <div class="ctrban"><img src="https://www.logistycmx.com/contacto.jpg" style="position: absolute; width: 100%; height: 100%" name="cube"></div>

        <!---------------------------------->
        <main>
            <div class="main1AltaProducto" id="main1">

                <form action="\LOGYSCYCMX ADMIN\Administrador\FuncionesPHP\Productos\addProducto.php" method="post" name="add">
                <h1 align="center">Alta de producto</h1>
                <br>
                <input type="text" name="NombreCat1" placeholder="Nombre del producto" required>
                <br>
                <input type="text" name="descripcion" placeholder="Descripción del producto" required>
                <br>
                <input type="text" name="PrecioCat1" placeholder="Precio del producto" required>
                <br>
                <td><input type="submit" name="submit" value="Dar de alta"></td>
            </form>
            </div>
            <!---------------------------------->

            <div class="main2AltaAdmin" id="main2">

            
                <form action="\LOGYSCYCMX ADMIN\Administrador\FuncionesPHP\CuentasAdmin\addAdmin.php" method="post" name="addAdmin">
                <h1 align="center">Alta de Administradores</h1>
                <br>
                <input type="text" name="Nombre"  placeholder="Nombre(s)" required>
                <br>
                <input type="text" name="Apellido" placeholder="Apellidos" required>
                <br>
                <input type="text" name="Correo" placeholder="Correo Electronico" required>
                <br>
                <input type="password" name="Password" placeholder="Contraseña" required>
                <br>
                
                <td><input type="submit" name="submitAdmin" value="Crear Administrador"></td>
                </form>
            </div>

            
            <!---------------------------------->

            <div class="main3pedidos" id="main3">
                <h1 align="center">Pedidos (pruebas)</h1>
            </div>

            
            <div class="main4curriculum" id="main4">
                <h1 align="center">Curriculum</h1>

                <div class="contenedorCurriculums">


                    <table class="tablaCurriculums">
                        <thead>
                            
                            <tr>
                                <th>Curriculums</th>
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
        </main>

    </section>



    <footer></footer>
    
</body>
</html>