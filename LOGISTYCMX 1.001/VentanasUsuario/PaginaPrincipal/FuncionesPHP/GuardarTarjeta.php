<?php 


$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');




if($conex){

    session_start();

    $Usuario = $_SESSION['CorreoIngreso'];

if ($conex->connect_error) {
    die("Error de conexión: " . $conex->connect_error);
}

$nombreTitular = $_POST['NombreTarjeta'];
$numeroTarjeta = $_POST['NumeroTarjeta'];
$MesVencimiento = $_POST['MesTarjeta'];
$AnoVencimiento = $_POST['AnoTarjeta'];
$codigoSeguridad = $_POST['cvvTarjeta'];

$sql = "INSERT INTO tarjeta_pago (Propietario_Tarjeta, Nombre_Tarjeta, Numero_Tarjeta, Mes_Tarjeta, Ano_Tarjeta, cvv_Tarjeta) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conex->prepare($sql);

$stmt->bind_param("ssssss", $Usuario, $nombreTitular, $numeroTarjeta, $MesVencimiento, $AnoVencimiento, $codigoSeguridad);

$stmt->execute();

if ($stmt->affected_rows > 0) {

    $Usuario = $_SESSION['CorreoIngreso'];
    $consulta1="SELECT * FROM domicilio WHERE Usuario_Domicilio = '$Usuario'";
    $resultado1=mysqli_query($conex,$consulta1);
    $filas1=mysqli_num_rows($resultado1);

    if($filas1){
        $IndexAredirigirDESDEpayment = "CheckCompra.php";

    }else{
        $IndexAredirigirDESDEpayment = "Envios.php";
    }
   
    header("Location: /LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/" . $IndexAredirigirDESDEpayment);
    

} else {
    echo "Error al insertar datos: " . $stmt->error;
}

// Cerrar la conexión y liberar recursos
$stmt->close();
$conex->close();
}
?>