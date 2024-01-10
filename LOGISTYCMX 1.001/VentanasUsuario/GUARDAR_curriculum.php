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
        $FielNombre_Curriculum = trim($_POST['field_NombresC']);
        $FielApellidoP_Curriculum = trim($_POST['field_ApellidoPC']);
        $FielApellidoM_Curriculum = trim($_POST['field_ApellidoMC']);
        $FielResumen_Curriculum = trim($_POST['field_ResumenC']);
        $FielHistorial_Curriculum = trim($_POST['field_HistorialC']);

        $FielFormacion_Curriculum = trim($_POST['field_FormacionC']);
        $FielCorreo_Curriculum = trim($_POST['field_CorreoC']);
        $FielTelefono_Curriculum = trim($_POST['field_TelefonoC']);
        $FechaNacimientoNormal = trim($_POST['field_FechaNacimientoC']);

        $FechaNacimientoRevertida = strrev($FechaNacimientoNormal);

        $fecha = date("y-m-d");

            

            
            $consulta = "INSERT INTO curriculum (Nombres_CURRICULUM, ApellidoP_CURRICULUM, ApellidoM_CURRICULUM, Resumen_CURRICULUM, Historial_CURRICULUM, Formacion_CURRICULUM, Correo_CURRICULUM, telefono_CURRICULUM, FechaNacimiento_CURRICULUM, FechaEnvio_CURRICULUM  )
                    VALUES('$FielNombre_Curriculum', '$FielApellidoP_Curriculum', '$FielApellidoM_Curriculum', '$FielResumen_Curriculum','$FielHistorial_Curriculum', '$FielFormacion_Curriculum' , '$FielCorreo_Curriculum' , '$FielTelefono_Curriculum', '$FechaNacimientoRevertida', '$fecha')";

            $resultado = mysqli_query($conex, $consulta);
            if ($resultado) {
                //include('indexLOGIN.html');
                
                ?>
                <script>
                    alert("Curriculum Enviado");
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
