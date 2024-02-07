<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
</head>



<body>

    <h4>Instrucciones:</h4>
    <p>Ingrese el correo electronico con el cual creo su cuenta. Al dar click,<br> en recuperar se le enviara via correo electronico un codigo el cual debe <br> ingresar a continuacion para poder restablecer su contraseña</p>
    
    <div>

    <form method="post" action="Recuperar.php">    
    <input type="email" placeholder="Correo Electronico" name="emailrecuperar" autocomplete="off" required> 
    <button type="sumbit" name="'enviarrecuperar">Recuperar</button>
    </form>

    </div>
    
</body>
</html>
