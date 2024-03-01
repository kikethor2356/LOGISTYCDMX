<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<?php

$directorioActual = dirname(__DIR__);
$document_root = $_SERVER['DOCUMENT_ROOT'];
include($document_root . '\CONEXION\conexion.php');


if ($conex){
        $consulta = "SELECT * FROM productocat1";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){

                while ($row = $resultado->fetch_array()){
                        $Nombre_Producto = $row["NombreCat1"];
                        $Precio_Producto = $row["PrecioCat1"];
                        $ID_Producto = $row["ContadorCat1"];
                        $Descripcion_Producto = $row["descripcion"];
                        $Existencia_Producto = $row["Existencia_Producto"];
                        $AmarreAldo_Producto = $row["AmarreAldo"];
                        $NumeroSerie_Producto = $row["NumSerie"];
                        $Imagen_Producto = $row["Imagen"];
                        $Marca_Producto = $row["Marca"];
                   
                        
                        ?>

                            <tr  class="divscur">
                                <th><?php echo $Nombre_Producto; ?></th>
                                <th><?php echo $Precio_Producto; ?></th>
                                <th><?php echo $ID_Producto; ?></th>
                                <th><?php echo $Existencia_Producto; ?></th>
                                <th><?php echo $AmarreAldo_Producto; ?></th>
                                <th><?php echo $NumeroSerie_Producto; ?></th>
                                <th><?php echo $Marca_Producto; ?></th>
                                <th><?php echo $Descripcion_Producto; ?></th>   
                                <th>
                                    <form>
                                        <button>Editar</button>
                                    </form>
                                </th>

                                <th>
                                    <form>
                                        <button>Eliminar</button>
                                    </form>
                                </th>
                            </tr>

                            



                        
                        <?php

                }





        }
       

}



?>