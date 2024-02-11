<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabaja con nosotros</title>
</head>



<body>

    <header></header>

    <section>
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
        

        <h1>Envia Tu curriculum</h1>

        <form method="post" action="\LOGISTYCMX 1.001\VentanasUsuario\curriculum\FuncionesPHP\GUARDAR_curriculum.php" enctype="multipart/form-data">
        <input type="text" placeholder="Nombre(s)" name="field_NombresC" required >
        <br>

        <input type="text" placeholder="Apellido Paterno" name="field_ApellidoPC" required >

        <br>

        <input type="text" placeholder="Apellido Materno" name="field_ApellidoMC" required >

        <br>

        <input type="text" placeholder="Resumen Profesional" name="field_ResumenC" required >

        <br>

        <input type="text" placeholder="Historial Laboral" name="field_HistorialC" required >

        <br>

        <input type="text" placeholder="Formacion Academica" name="field_FormacionC" required >

        <br>

        <select name="ComboVacante">
            <?php
                        include("..\FuncionesPHP\GeneradorComboVacante.php");
            ?>
        </select>

        <br>

        <input type="text" placeholder="Correo Electronico" name="field_CorreoC" required >

        <br>

        <input type="text" placeholder="Telefono" name="field_TelefonoC" required >

        <br>

        <input type="text" placeholder="DD/MM/AAAA" name="field_FechaNacimientoC" required >

        <br>

        <input type="file" name="fieldfoto" id="foto">

        <br>
        <br>

        <button type="submit" name="btnEnviarCurriculum">Enviar curriculum</button>
        </form> 

    </section>

    <footer></footer>

</body>

</html>