<?php

$directorioActual = dirname(__DIR__);
include($directorioActual . "/CONEXION/conexion.php");

if (isset($_POST['btnEnviarCurriculum'])) {
    if (
        strlen($_POST['field_NombresC']) >= 1 &&
        strlen($_POST['field_ApellidoPC']) >= 1 &&
        strlen($_POST['field_ApellidoMC']) >= 1 &&
        strlen($_POST['field_ResumenC']) >= 1 &&
        strlen($_POST['field_HistorialC']) >= 1 &&

        strlen($_POST['field_FormacionC']) >= 1 &&
        strlen($_POST['field_CorreoC']) >= 1 &&
        strlen($_POST['field_TelefonoC']) >= 1 &&
        strlen($_POST['field_FechaNacimientoC']) >= 1
    ) {
        //contra_usuario
        $FielNombreUser = trim($_POST['field_NombresC']);
        $FielApellidosUser = trim($_POST['field_ApellidoPC']);
        $FielEmailUser = trim($_POST['field_ApellidoMC']);
        $FielContraUser = trim($_POST['field_ResumenC']);
        $FielTelefonoUser = trim($_POST['field_HistorialC']);

        $FielTelefonoUser = trim($_POST['field_FormacionC']);
        $FielTelefonoUser = trim($_POST['field_CorreoC']);
        $FielTelefonoUser = trim($_POST['field_TelefonoC']);
        $FielTelefonoUser = trim($_POST['field_FechaNacimientoC']);
        $fecha = date("y-m-d");

            

            
            $consulta = "INSERT INTO cliente_usuario (nombre_usuario, apellidos_usuario, correo_usuario, contrasena_usuario, telefono, categoria_usuario, fecha_creacion_usuario )
                    VALUES('$FielNombreUser', '$FielApellidosUser', '$hash_correoUSUARIO', '$hash_contraUSUARIO','$FielTelefonoUser', '$CategoriaUser' , '$fecha')";

            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                //include('indexLOGIN.html');
                
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
