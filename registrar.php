<?php

include("condb.php");

if (isset($_POST['register']))
{
    if (
         strlen($_POST["type"]) >= 1 &&
         strlen($_POST['marc']) >= 1 &&
         strlen($_POST['ubi']) >= 1 &&
         strlen($_POST['codigo']) >= 1 &&
         strlen($_POST['descripcion']) >= 1 ) 
          
          {
          $type = trim($_POST ['type']);
          $marc = trim($_POST ['marc']);
          $fechareg =date("d/m/y");
          $ubi = trim($_POST ['ubi']);
          $codigo = trim($_POST ['codigo']);
          $descripcion = trim($_POST ['descripcion']);
          $frecu= trim($_POST['frecu']);
          $consulta = "INSERT INTO datos(tipo,marca,ubicacion,codigo,descripcion,fechareg,frecu) 
                              VALUES ('$type','$marc','$ubi','$codigo','$descripcion','$fechareg','$frecu')";
          $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                              ?>
                              <h3 class="ok"> Equipo cargado correctamente</h3>
                              <?php
                              } else {

                              ?>
                              <h3 class="bad"> Ha ocurrido un error</h3>
                              <?php


                               }
        }


}


?>