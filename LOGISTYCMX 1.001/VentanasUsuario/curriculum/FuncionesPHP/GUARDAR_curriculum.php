<?php


$ruta_completa = dirname(__DIR__);
$directorio_deseado = 'LOGISTYCMX 1.001';
$posicion = strpos($ruta_completa, $directorio_deseado);


if ($posicion !== false) {
    
    $nueva_ruta = substr($ruta_completa, 0, $posicion + strlen($directorio_deseado));
    require($nueva_ruta."\CONEXION\conexion.php");

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
            strlen($_POST['field_FechaNacimientoC']) >= 1 &&
            strlen($_POST['ComboVacante']) >= 1 
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
            $seleccionVacante = $_POST["ComboVacante"];
    
    
            $FechaNacimientoNormal = trim($_POST['field_FechaNacimientoC']);
            $fechaConvertida = str_replace("/", "-", $FechaNacimientoNormal);
            $fechaObj = DateTime::createFromFormat('d-m-Y', $fechaConvertida);


    
            //esta es la fecha ya chida que aparece en el formato  AAAA-MM-DD
            $fechaFormateada = $fechaObj->format('Y-m-d');
    
    
            $fecha = date("y-m-d");

            $nombre_imagen = $_FILES['fieldfoto']['name'];
            $temporal = $_FILES['fieldfoto']['tmp_name'];
            $carpeta = '../imgCURRICULUM';



if (!empty($nombre_imagen) && !empty($temporal)) {
    
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }

    $ruta = $carpeta . "/" . $nombre_imagen;

    if (move_uploaded_file($temporal, $ruta)) {
        echo "El archivo se ha cargado correctamente.";
    } else {
        echo "Hubo un error al intentar cargar el archivo.";
    }
} else {
    echo "No se seleccionó ningún archivo para cargar.";
}
    
                
    
                
                $consulta = "INSERT INTO curriculum (Nombres_CURRICULUM, ApellidoP_CURRICULUM, ApellidoM_CURRICULUM, Resumen_CURRICULUM, Historial_CURRICULUM, Formacion_CURRICULUM, Vacante_Curriculum, Correo_CURRICULUM, telefono_CURRICULUM, FechaNacimiento_CURRICULUM, FechaEnvio_CURRICULUM , Imagen_Curriculum  )
                        VALUES('$FielNombre_Curriculum', '$FielApellidoP_Curriculum', '$FielApellidoM_Curriculum', '$FielResumen_Curriculum','$FielHistorial_Curriculum', '$FielFormacion_Curriculum' ,'$seleccionVacante', '$FielCorreo_Curriculum' , '$FielTelefono_Curriculum', '$fechaFormateada', '$fecha' , '$ruta')";
    
                $resultado = mysqli_query($conex, $consulta);
                if ($resultado) {
                    //include('indexLOGIN.html');
                    
                    echo "<script> alert('curriculum creado'.'$fechaFormateada'); </script>";
    
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

    
} else {
    echo "Ocurrio un problema el directorio deseado no se encontró en la ruta.";
}





?>
