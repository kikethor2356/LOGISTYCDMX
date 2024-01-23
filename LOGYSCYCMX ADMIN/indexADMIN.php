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
    background-color: black; 
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
    background-color: black;
    top: 36%;
    left: 0px;
    box-sizing: 1;

    overflow-y:hidden;

}

.ctrban{
    position: absolute;
    background-color: black;
    width: 70%;
    height: 70%;
    left: 26%;
    top: 20%;
}

.DIVbtn1{
    position: absolute;
    width: 100%;
    height: 17%;
    top: 3%;
    left: 0px;
    background-color: black;
}

.DIVbtn2{
    position: absolute;
    width: 100%;
    height: 17%;
    top: 23%;
    left: 0px;
    background-color: black;
}

.DIVbtn3{
    position: absolute;
    width: 100%;
    height: 17%;
    top: 43%;
    left: 0px;
    background-color: black;
}

.DIVbtn4{
    position: absolute;
    width: 100%;
    height: 17%;
    top: 63%;
    left: 0px;
    background-color: black;
}

.btn{
    width: 85%;
    height: 100%;
    cursor: pointer;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    color: white;
    font-weight: bolder;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 20px;
    background-color: #FC2D2D;
    box-shadow: 5px 5px 5px grey;
}

.btn:hover{
    background-color: #FE4444;
}

.btn:focus{
    width: 85%;
    height: 100%;
    cursor: pointer;
    color: black;
    background-color: #F96C2A;
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
    width: 100%;
    height: 100%;
    left: 0%;
    top: -8.5%;
}

.tablaCurriculums{
    border: 2px solid black;
}

tr th{
    border: 2px solid black;
}

.acclink{
    position: absolute;
    left: 1%;
    top: 7%;
    width: 9%;
    height: 50%;
    color: white;
    background-color: black;
    font-family: monospace;
    font-weight: bold;
    font-size: 30px;
    border: 1px solid white;
}

.acclink:hover{
    cursor: pointer;
}

.clslink{
    position: absolute;
    left: 11%;
    top: 7%;
    width: 14%;
    height: 50%;
    color: white;
    background-color: black;
    font-family: monospace;
    font-weight: bold;
    font-size: 30px;
    border: 1px solid white;
}

.clslink:hover{
    cursor: pointer;
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

    var specifyimage=new Array()

specifyimage[0]="https://www.logistycmx.com/contacto.jpg"

specifyimage[1]="https://scontent.fgdl2-1.fna.fbcdn.net/v/t39.30808-6/325643991_696222708746147_7073958842831652492_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=dd5e9f&_nc_ohc=9Z6trmCiGP0AX_zZzxK&_nc_ht=scontent.fgdl2-1.fna&oh=00_AfBObNxteAabqFjeW8aOD19utshSLnVZkZhvCMhwlyBFXg&oe=65B4EEDB"

specifyimage[2]="https://www.logistycmx.com/ppal.jpg"


var delay=3000 //Tiempo de transición, 1000 = 1 segundo

var count =1;

 
var cubeimage=new Array()

for (i=0;i<specifyimage.length;i++){

cubeimage[i]=new Image()

cubeimage[i].src=specifyimage[i]

}


function movecube(){

if (window.createPopup)

cube.filters[0].apply()

document.images.cube.src=cubeimage[count].src;

if (window.createPopup)

cube.filters[0].play()

count++;

if (count==cubeimage.length)

count=0;

setTimeout("movecube()",delay)

}

window.onload=new Function("setTimeout('movecube()',delay)")

</script>

<!----------------------------------------------------------------->



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

                <form action="Productos\addProducto.php" method="post" name="add">
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
                <form action="CuentasAdmin\addAdmin.php" method="post" name="addAdmin">
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

                            <form method="post" action="Curriculum\IndexMostrarCurricuIndividual.php">

                            <?php

                            include("Curriculum\MostrarSolicitudesEmpleo.php");
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