<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/LOGISTYCMX 1.001/VentanasUsuario/curriculum/IndexPHP/postularse.css">
    <title>Trabaja con nosotros</title>
</head>



    <body>

    <section id="header">
            <a href="#"><img src="" class="logo" alt="Logo"></a>
    
            <div id="Navbar">
                <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/curriculum/IndexPHP/Postularse.php">Postularse</a></li>
                <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/Vacantes/IndexPHP/IndexVacantes.php">Vacantes</a></li>  
                <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/Landing/landing_index.php">Contactanos</a></li>
                <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/Landing/landing_index.php">Nosotros</a></li>    
            </div>
        </section>
        <div class="container-boss">
            <div class="container">
                <img src="/LOGISTYCMX 1.001/VentanasUsuario/Landing/assets/refacciones-auto.jpg" alt="">
                <form  id="mainForm" method="post" action="\LOGISTYCMX 1.001\VentanasUsuario\curriculum\FuncionesPHP\GUARDAR_curriculum.php" enctype="multipart/form-data">
                    <h2>Postulate</h2>
                    <div class="form-control">
                        <label for="name">Nombre(s)</label>
                            <input 
                                type="text" 
                                placeholder="Ingresa tu Nombre(s)" 
                                name="field_NombresC" 
                            required>
                    </div>
    
                    <div class="form-control">
                        <label>Apellido Paterno</label>
                        <input 
                            type="text" 
                            placeholder="Ingresa tu Apellido Paterno" 
                            name="field_ApellidoPC" 
                            required 
                        >
                    </div>
    
                    <div class="form-control">
                        <label>Apellido Materno</label>
                        <input 
                            type="text" 
                            placeholder="Ingresa tu Apellido Materno" 
                            name="field_ApellidoMC" 
                            required 
                        >
                    </div>
                    <div class="form-control">
                        <label>Vacantes Disponibles</label>
                        <select name="ComboVacante">
                            <?php
                            include("..\FuncionesPHP\GeneradorComboVacante.php");
                             ?>
                        </select>
                    </div>
    
                    <div class="form-control">
                        <label for="email">Correo Electronico</label>
                        <input 
                            type="text" 
                            placeholder="Escribe tu Correo Electronico" 
                            name="field_CorreoC" 
                            required 
                        >
                    </div>
                    
                    <div class="form-control">
                        <label for="number">Numero Celular</label>
                        <input 
                            type="text" 
                            placeholder="Ingresa tu numero celular" 
                            name="field_TelefonoC" 
                            required 
                        >
                    </div>
    
                    <div class="form-control">
                        <label>Fecha de Nacimiento</label>
                        <input 
                            type="date" 
                            placeholder="DD/MM/AAAA" 
                            name="field_FechaNacimientoC" 
                            required 
                        >
                    </div>
    
                    <div class="form-control">
                        <label>Ingresa tu curriculum PDF</label>
                        <input 
                            type="file" 
                            name="archivo_pdf" 
                            id="archivo_pdf"
                            accept="application/pdf"
                        >
                    </div>  
                    <button type="submit" name="btnEnviarCurriculum">Enviar curriculum</button>   
                </form>
                
            </div>
        </div>

        


         
        

    </body>

</html>