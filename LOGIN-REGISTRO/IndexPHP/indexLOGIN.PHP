<!DOCTYPE html>
<html lang="es">
<!--Ultima modificacion: 06/12/2023     por: Omar Amaral-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGISTYCMX-Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../CSS/Login.css">
</head>



<body>


    <div class="container" id="container">
        
        <div  class="form-container sign-up">


            
            
        </div>

        <div class="form-container sign-in">

  
                <form method="post" action="\LOGIN-REGISTRO\FuncionesPHP\validar.php">
                    <h1>Bienvenido</h1>
                    <input type="email" placeholder="Correo electronico" name="CorreoIngresado" required>
                    <input type="password" placeholder="Contraseña" name="CntrasenaIngresada" required>
                    <button type="submit">Entrar</button>
                    <a href="indexRECUPERARCONTRA.php">Olvidaste tu Contraseña?</a>
                </form>    
  
            
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido denuevo!</h1>
                    <p>Introduzca sus datos personales para utilizar todas las funciones del sitio</p>
                    <button class="hidden" id="login">Ingresar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Bienvenido!</h1>
                    <p>Regístrese con sus datos personales para utilizar todas las funciones del sitio</p>
                    <button class="hidden" id="register">Registrar</button>
                </div>
            </div>
        </div>
    </div>
    
    </div>


   

        



<script src="../Scripts/login.js"></script>
    
</body>


</html>