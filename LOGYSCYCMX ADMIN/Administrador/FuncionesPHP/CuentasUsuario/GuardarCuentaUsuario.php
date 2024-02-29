<?php

error_reporting(E_ALL & ~E_NOTICE);
session_start();







if($_SESSION['CorreoIngreso']){

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');

if (isset($_POST['BtnRegistrar'])) {
    if (
        strlen($_POST['nombre_user']) >= 1 &&
        strlen($_POST['apellidos_user']) >= 1 &&
        strlen($_POST['email_user']) >= 1 &&
        strlen($_POST['contra_user']) >= 1 &&
        strlen($_POST['telefono_user']) >= 1
    ) {
        //contra_usuario
        $FielNombreUser = trim($_POST['nombre_user']);
        $FielApellidosUser = trim($_POST['apellidos_user']);
        $FielEmailUser = trim($_POST['email_user']);
        $FielContraUser = trim($_POST['contra_user']);
        $FielTelefonoUser = trim($_POST['telefono_user']);
        $CategoriaUser = 1;
        $fecha = date("y-m-d");


        // Verificar si el correo ya existe
        $consultaCorreoExistente = "SELECT correo_usuario FROM cliente_usuario WHERE correo_usuario = '$FielEmailUser'";
        $resultadoCorreo = mysqli_query($conex, $consultaCorreoExistente);

        // Verificar si el teléfono ya existe
        $consultaTelefonoExistente = "SELECT telefono FROM cliente_usuario WHERE telefono = '$FielTelefonoUser'";
        $resultadoTelefono = mysqli_query($conex, $consultaTelefonoExistente);

        if (mysqli_num_rows($resultadoCorreo) > 0) {
            // El correo ya existe en la base de datos






            ?>
            <script>
                 alert('El CORREO ELECTRONICO ya esta registrado utilice otro por favor'); 
		        window.location.href = '../../IndexPHP/alta-admin.php';
	        </script>
            
            <?php
        } elseif (mysqli_num_rows($resultadoTelefono) > 0) {

            
            // El teléfono ya existe en la base de datos
            ?>
            <script>
                 alert('El numero telefonico ya esta registrado utilice otro por favor'); 
		        window.location.href = '../../IndexPHP/alta-admin.php';
	        </script>
            <?php
        } else {
            // Los datos no existen, realizar la inserción
            
            $hash_contraUSUARIO = hash('sha256', $FielContraUser);
            $hash_correoUSUARIO = hash('sha256', $FielEmailUser);

            
            $consulta = "INSERT INTO cliente_usuario (nombre_usuario, apellidos_usuario, correo_usuario, contrasena_usuario, telefono, categoria_usuario, fecha_creacion_usuario )
                    VALUES('$FielNombreUser', '$FielApellidosUser', '$hash_correoUSUARIO', '$hash_contraUSUARIO','$FielTelefonoUser', '$CategoriaUser' , '$fecha')";

            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {

                

                
                

                ?>
                <script>
                 alert('La cuenta se ha creado EXITOSAMENTE.'); 
		        window.location.href = '../../IndexPHP/alta-admin.php';
	        </script>
                <?php
                
                
            } else {
                ?>
                <h3 class="error">Ocurrió un error</h3>
                <?php
            }
        }
    } else {
        ?>
        <h3 class="error" style="
            position: relative;
            left: 28%;
            color: red;
        ">Llena todos los campos</h3>
        <?php
    }
}

}

else{


    header ("Location: $document_root\Errores\IndexNoSesion.php");
}
?>