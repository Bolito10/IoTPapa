<?php

  $conexion = mysqli_connect("143.198.234.5","Luis","12345");
  mysqli_select_db($conexion,"proyecto");


  $temperatura = $_GET['temperatura'];

  $hoy = date("y.m.d");
  date_default_timezone_set('America/Mexico_City');
  $hora = date("H:i:s"); 


echo "$hoy";
echo "$hora";

$query = "INSERT INTO prueba(Fecha,Hora,Temperatura,Latitud,Longitud)
            values('$hoy','$hora','$temperatura','asd','asd')";
            $resultado = mysqli_query($conexion,$query);

?>