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
$tabla = "admin";


$consulta="SELECT * FROM $tabla WHERE Correo='$hash_BuscadorCorreoUser' && Password_Admin='$hash_BuscadorContraUser'";




$resultado=mysqli_query($conex,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas)
{
    $_SESSION['CorreoIngreso'] = $CorreoIngreso;
    //header("location:IndexMisClases.php");

    echo "usuario encontrado";
    ?>
    <script> 
    alert("Usuario encontrado, Bienvenido.");
    </script>
    "
    <?php

    
   // header("location: \LOGYSCYCMX ADMIN\indexADMIN.php");


}

else
{


    echo "usuario NO encontrado <br>" . $CorreoIngreso . "<br>" . $contrasenaIngreso;
    //header("location: \LOGYSCYCMX ADMIN\Login\IndexPHP\indexLOGIN.php");
}

mysqli_free_result($resultado);
mysqli_close($conex);
  
?>
