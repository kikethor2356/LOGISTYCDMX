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
                <li><a href="/LOGISTYCMX 1.001/VentanasUsuario/Landing/landing_index.html">Contactanos</a></li>
                <li><a href="#Nosotros">Nosotros</a></li>    
            </div>
        </section>

  
        <table>
            <thead>
                <tr>
                    <th>N</th>
                    <th>Vacante</th>
                    <th>Descripcion</th>
                </tr>
            </thead>

            <tbody>
            <?php
            include("..\FuncionesPHP\GeneradorVacantes.php");
            ?>
            </tbody>
        </table>
        
        <div id="Form">
            <div class="txtform">
                <h1>Envia Tu curriculum</h1>
            </div>

            <div class="Cv-form">
                <form method="post" action="\LOGISTYCMX 1.001\VentanasUsuario\curriculum\FuncionesPHP\GUARDAR_curriculum.php" enctype="multipart/form-data">
                    <label for="name">Nombre(s)</label>
                    <input type="text" placeholder="Nombre(s)" name="field_NombresC" required >

                    <label for="name">Apellido Paterno</label>
                    <input type="text" placeholder="Apellido Paterno" name="field_ApellidoPC" required >
            

                    <label for="name">Apellido Materno</label>
                    <input type="text" placeholder="Apellido Materno" name="field_ApellidoMC" required >
            

            
                    <input type="text" placeholder="Resumen Profesional" name="field_ResumenC" required >
            

            
                    <input type="text" placeholder="Historial Laboral" name="field_HistorialC" required >
            
           
                    <input type="text" placeholder="Formacion Academica" name="field_FormacionC" required >
            
            
                    <select name="ComboVacante">
                        <?php
                                    include("..\FuncionesPHP\GeneradorComboVacante.php");
                        ?>
                    </select>
            
          
                    <input type="text" placeholder="Correo Electronico" name="field_CorreoC" required >
            
            
                    <input type="text" placeholder="Telefono" name="field_TelefonoC" required >
                        
                    <input type="text" placeholder="DD/MM/AAAA" name="field_FechaNacimientoC" required >
            
                    <input type="file" name="fieldfoto" id="foto">
            
                    <button type="submit" name="btnEnviarCurriculum">Enviar curriculum</button>
                    </form> 
            </div>

        </div>
        

        

  

</body>

</html>