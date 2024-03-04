<?php 

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');




if($conex){
    
        session_start();
        

        if($_SESSION['CorreoIngreso']){

            

            if(isset($_POST['btnAgregarDireccion'])){
                

                $CorreoUsuario = $_SESSION['CorreoIngreso'];  
                $Nombre_Domicilio = $_POST['nombres_domicilio'];   
                $Telefono_Domicilio = $_POST['numerotel_domicilio'];  
                $Calle_Domicilio = $_POST['calle_domicilio'];  
                $NumeroExt_Domicilio = $_POST['numeroext_domicilio'];  
                $NumeroInt_Domicilio = $_POST['numeroint_domicilio'];  
                $Municipio_Domicilio = $_POST['municipio_domicilio'];  
                $Estado_Domicilio = $_POST['estado_domicilio'];  
                $CodigoPostal_Domicilio = $_POST['codigopostal_domicilio'];  
                $Referencias_Domicilio = $_POST['referencias_domicilio'];

                if ($NumeroInt_Domicilio){

                }else{
                    $NumeroInt_Domicilio = "No agrego";
                }
        
                


                $consulta = "INSERT INTO domicilio (Usuario_Domicilio, Nombre_Domicilio, NumeroTel__Domicilio, Calle_Domicilio, NumeroEXT_Domicilio, NumeroINT_Domicilio, Municipio_Domicilio, Estado_Domicilio, CodigoPostal_Domicilio, Referencias_Domicilio)
                VALUES('$CorreoUsuario', '$Nombre_Domicilio', '$Telefono_Domicilio','$Calle_Domicilio', '$NumeroExt_Domicilio' , '$NumeroInt_Domicilio' , '$Municipio_Domicilio' , '$Estado_Domicilio' , '$CodigoPostal_Domicilio' , '$Referencias_Domicilio')";

                $resultado = mysqli_query($conex, $consulta);
                if ($resultado) {

                    $Usuario = $_SESSION['CorreoIngreso'];
                    $consulta2="SELECT * FROM tarjeta_pago WHERE Propietario_Tarjeta = '$Usuario'";
                    $resultado2=mysqli_query($conex,$consulta2);
                    $filas2=mysqli_num_rows($resultado2); 
        
                    if($filas2){
                        $IndexAredirigirDESDEenvio = "CheckCompra.php";
        
                    }else{
                        $IndexAredirigirDESDEenvio = "Payment.php";
                    }
                   
                    header("Location: /LOGISTYCMX 1.001/VentanasUsuario/PaginaPrincipal/IndexPHP/" . $IndexAredirigirDESDEenvio);
                    
            
                } else {
            
                    echo "Error al agregar direccion";
                }

            }else{
                echo "1";
            }


        }else{
            header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");
        }



    

}
?>