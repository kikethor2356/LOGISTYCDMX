<?php 

session_start();
$CorreoIngreso  =  $_POST['CorreoIngresado'];
$contrasenaIngreso  =  $_POST['CntrasenaIngresada'];
        


$_SESSION['CorreoIngreso'] = $CorreoIngreso;


// Obtén la ruta del directorio actual
$directorioActual = dirname(__DIR__);
$rutaRecortada = dirname($directorioActual);
include($rutaRecortada."\CONEXION\conexion.php");




$hash_BuscadorContraUser = hash('sha256', $contrasenaIngreso);
$hash_BuscadorCorreoUser = hash('sha256', $CorreoIngreso);


$consulta="SELECT * FROM cliente_usuario WHERE correo_usuario='$hash_BuscadorCorreoUser' and contrasena_usuario='$hash_BuscadorContraUser'";




$resultado=mysqli_query($conex,$consulta);


$filas=mysqli_num_rows($resultado);

if($filas)
{
    $_SESSION['CorreoIngreso'] = $CorreoIngreso;
    //header("location:IndexMisClases.php");
    ?>

    <script> 
    //alert("Usuario encontrado, Bienvenido.");
    </script>
    <?php

    header("location: \LOGISTYCMX 1.001\VentanasUsuario\PaginaPrincipal\IndexPHP\paginaprincipal.php");

}

else
{

    $consulta2="SELECT * FROM admin WHERE  Correo='$hash_BuscadorCorreoUser' and Password_Admin='$hash_BuscadorContraUser'";

    $resultado2=mysqli_query($conex,$consulta2);

    $filas2=mysqli_num_rows($resultado2);

    if($filas2)
    {

        $_SESSION['CorreoIngreso'] = $CorreoIngreso;
        //header("location:IndexMisClases.php");
        ?>
    
        <script> 
        //alert("Usuario encontrado, Bienvenido.");
        </script>
        <?php
    
        header("location: ..\LOGISTYCDMX\LOGYSCYCMX ADMIN\IndexPHP\indexADMIN.php");

    }
    else{
        header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");
    }

    




}

mysqli_free_result($resultado);
mysqli_close($conex);
  
?>
