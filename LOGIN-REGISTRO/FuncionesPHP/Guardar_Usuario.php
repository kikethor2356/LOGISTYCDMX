<?php

// Obtén la ruta del directorio actual
$directorioActual = dirname(__DIR__);
$rutaRecortada = dirname($directorioActual);
include($rutaRecortada."\CONEXION\conexion.php");

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

            header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");
            ?>
            <script>
                alert("El correo ya está registrado. Por favor, utiliza otro correo.");
            </script>
            <?php
        } elseif (mysqli_num_rows($resultadoTelefono) > 0) {

            header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");
            // El teléfono ya existe en la base de datos
            ?>
            <script>
                alert("El teléfono ya está registrado. Por favor, utiliza otro teléfono.");
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

                

                
                header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");

                ?>
                <script>
                    alert("La cuenta ha sido creada exitosamente");
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
?>