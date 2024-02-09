<?php

//conexion
    $conex = mysqli_connect("localhost","root","","logistycmx_db");

    if (!$conex) {
        die("Error de conexión: " . mysqli_connect_error());
    } else {
        echo "conexion con exito";
    
    }
?>