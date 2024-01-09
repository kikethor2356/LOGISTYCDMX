<?php 

session_start();
$CorreoIngreso  =  $_POST['CorreoIngresado'];
$contrasenaIngreso  =  $_POST['CntrasenaIngresada'];
        


$_SESSION['CorreoIngreso'] = $CorreoIngreso;

// Obtén la ruta del directorio actual
$directorioActual = dirname(__DIR__);
include($directorioActual . "/CONEXION/conexion.php");


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

    include($directorioActual . "/VentanasUsuario/paginaprincipal.html");
    
}

else
{

?>   

<script> alert("Usuario no encontrado, intentelo de nuevo.");</script>

<?php

include("indexLOGIN.html");

}

mysqli_free_result($resultado);
mysqli_close($conex);
  
?>
