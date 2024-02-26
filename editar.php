<!DOCTYPE html>
<html>
    <head>
        <title>editar page</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
        <?php 
        $inc = include ("condb.php");
        if ($inc) {

            $consulta = "SELECT * FROM datos";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado ==true) {
                while ($row = $resultado ->fetch_array()){
                    $tipo = $row['tipo'];
                    $marca = $row['marca'];
                    $ubicacion = $row['ubicacion'];
                    $codigo = $row['codigo'];
                    $descripcion = $row['descripcion'];
                    $frecu = $row['frecu'];
                    $fechareg = $row['fechareg'];


                    $fechareg = date ('d-m-Y',strtotime($fechareg)); 
                    $hoy = date('d-m-y');
                    
                   
                   
                    
                   
                   

                  

                    


                    ?>
                    <div class="mostrar">
                         <h2><?php echo $tipo; ?></h2>
                         <div>
                            <p>
                                 
                                 <b>Marca: </b> <?php echo $marca; ?> <br>
                                 <b>Ubicación: </b> <?php echo $ubicacion; ?> <br>
                                 <b>Código: </b> <?php echo $codigo; ?> <br>
                                 <b>Descripción: </b> <?php echo $descripcion; ?> <br>
                                 <b>Próximo Mantenimiento: </b> <?php echo $fechareg ?> <br>
                            </p>    
                         </div>   
                    </div>     
                    <?php
                }
            }
        }
        ?>
    </body>
</html>