<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>


<style>

.header1{

    position: absolute;
    width: 100%;
    height: 13%;
    background-color: aqua; 
    top:0px ;
    left: 0px;
}

.nav1{
    position: absolute;
    width: 23%;
    height: 87%;
    background-color: rgb(0, 255, 34);
    top: 13%;
    left: 0px;
}

.cajaNAV1{
    position: absolute;
    width: 100%;
    height: 36%;
    background-color: blue;
    top: 0px;
    left: 0px;

}

.cajaNAV2{
    position: absolute;
    width: 100%;
    height: 64%;
    background-color: rgb(151, 151, 230);
    top: 36%;
    left: 0px;
    box-sizing: 1;

    overflow-y:hidden;

}

.DIVbtn1{
    position: absolute;
    width: 100%;
    height: 17%;
    top: 3%;
    left: 0px;
    background-color: brown;
}

.DIVbtn2{
    position: absolute;
    width: 100%;
    height: 17%;
    top: 23%;
    left: 0px;
    background-color: brown;
}

.DIVbtn3{
    position: absolute;
    width: 100%;
    height: 17%;
    top: 43%;
    left: 0px;
    background-color: brown;
}

.DIVbtn4{
    position: absolute;
    width: 100%;
    height: 17%;
    top: 63%;
    left: 0px;
    background-color: brown;
}

.btn{
    width: 100%;
    height: 100%;
    cursor: pointer;
}

.btn:focus{
    width: 100%;
    height: 100%;
    cursor: pointer;
    background-color: yellow;
}

.main1AltaProducto{
    position: absolute;
    width: 77%;
    height: 87%;
    left: 23%;
    top: 13%;
    background-color: bisque;
    display: none;

}

.main2AltaAdmin{
    position: absolute;
    width: 77%;
    height: 87%;
    left: 23%;
    top: 13%;
    background-color: rgb(255, 140, 0);
    display: none;
}

.main3pedidos{
    position: absolute;
    width: 77%;
    height: 87%;
    left: 23%;
    top: 13%;
    background-color: rgb(255, 0, 221);
    display: none;
}

.main4curriculum{
    position: absolute;
    width: 77%;
    height: 87%;
    left: 23%;
    top: 13%;
    background-color: transparent;
    display: none;
}

.contenedorCurriculums{
    background-color: rgb(161, 202, 137);
    position: relative;
    width: 95%;
    height: 88%;
    left: 2.5%;

}

.tablaCurriculums{
    border: 2px solid black;
}

tr th{
    border: 2px solid black;
}

</style>

<!----------------------------------------------------------------->

<script>
    function mostrarmain1(){

        var  main1 = document.getElementById("main1");
        var  main2 = document.getElementById("main2");
        var  main3 = document.getElementById("main3");
        var  main4 = document.getElementById("main4");

        main1.style.display = "block";
        main2.style.display = "none";
        main3.style.display = "none";
        main4.style.display = "none";

    }

    function mostrarmain2(){
        var  main1 = document.getElementById("main1");
        var  main2 = document.getElementById("main2");
        var  main3 = document.getElementById("main3");
        var  main4 = document.getElementById("main4");

        main1.style.display = "none";
        main2.style.display = "block";
        main3.style.display = "none";
        main4.style.display = "none";
        
        
    }

    function mostrarmain3(){
        
        var  main1 = document.getElementById("main1");
        var  main2 = document.getElementById("main2");
        var  main3 = document.getElementById("main3");
        var  main4 = document.getElementById("main4");

        main1.style.display = "none";
        main2.style.display = "none";
        main3.style.display = "block";
        main4.style.display = "none";
    }

    function mostrarmain4(){
        
        var  main1 = document.getElementById("main1");
        var  main2 = document.getElementById("main2");
        var  main3 = document.getElementById("main3");
        var  main4 = document.getElementById("main4");

        main1.style.display = "none";
        main2.style.display = "none";
        main3.style.display = "none";
        main4.style.display = "block";
    }

</script>

<!----------------------------------------------------------------->



<body>

    <header>

        <div class="header1">
             <button>Cuenta</button>
             <button>Cerrar Sesión</button>
        </div>

    </header>


    <section>
        <nav class="nav1">

            <div class="cajaNAV1"></div>


            <div class="cajaNAV2">

                <div class="DIVbtn1">
                    <button type="button" class="btn" onclick="mostrarmain1()">Alta de producto</button>
                </div>


                <div class="DIVbtn2">
                    <button class="btn" onclick="mostrarmain2()">Alta de administrador</button>
                </div>

                <div class="DIVbtn3">
                    <button class="btn" onclick="mostrarmain3()">pedidos (prueba)</button>
                </div>

                <div class="DIVbtn4">
                    <button class="btn" onclick="mostrarmain4()">Solicitudes de empleo</button>
                </div>
                
            </div>

        </nav>

        <!---------------------------------->
        <main>
            <div class="main1AltaProducto" id="main1">

                <form action="addProducto.php" method="post" name="add">
                <h1 align="center">Alta de producto</h1>
                <br>
                <input type="text" name="NombreCat1" placeholder="Nombre del producto" required>
                <br>
                <input type="text" name="descripcion" placeholder="Descripción del producto" required>
                <br>
                <input type="text" name="PrecioCat1" placeholder="Precio del producto" required>
              <!--   <br>
                <input type="text" placeholder="Precion Cat1" required>
                <br>
                <input type="text" placeholder="Precion Cat2" required>
                <br>
                <input type="text" placeholder="Precion Cat3" required> 
                <br>
                <input type="text" placeholder="Precion Cat4" required>
                <br>
                <input type="text" placeholder="Precion Cat5" required>
                <br>
                <input type="text" placeholder="Precion Cat6" required>
                <br> -->
                <br>
                <td><input type="submit" name="submit" value="Dar de alta"></td>
            </form>
            </div>
            <!---------------------------------->

            <div class="main2AltaAdmin" id="main2">
                <form action="addAdmin.php" method="post" name="addAdmin">
                <h1 align="center">Alta de Administradores</h1>
                <br>
                <input type="text" name="Nombre"  placeholder="Nombre(s)" required>
                <br>
                <input type="text" name="Apellido" placeholder="Apellidos" required>
                <br>
                <input type="text" name="Correo" placeholder="Correo Electronico" required>
                <br>
                <input type="text" name="Password" placeholder="Contraseña" required>
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

                            <form method="post" action="MostrarCurricuIndividual.php">

                            <?php

                            include("MostrarSolicitudesEmpleo.php");
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