<?php

  $conexion = mysqli_connect("143.198.234.5","Luis","12345");
  mysqli_select_db($conexion,"proyecto");

  
  $contenedor = $_GET['contenedor'];
  
  $fecha = date("y.m.d");
  date_default_timezone_set('America/Mexico_City');
  $hora = date("H:i:s"); 

  $temperatura = $_GET['temperatura'];

  $humedad     = $_GET['humedad'];
  $templiquido = $_GET['templiquido'];
  $latitud     = $_GET['latitud'];
  $longitud    = $_GET['longitud'];
  $altitud     = $_GET['altitud'];
  $rumbo       = $_GET['rumbo'];
  $velocidad  = $_GET['velocidad'];
  $satelites   = $_GET['satelites'];
   
$altitud = strlen($latitud);



$query = "INSERT INTO seguimiento(contenedor,fecha,hora,temperatura,humedad,templiquido,latitud,longitud,altitud,rumbo,velocidad,satelites)
            values('$contenedor','$fecha','$hora','$temperatura','$humedad','$templiquido','$latitud','$longitud','$altitud','$rumbo','$velocidad','$satelites')";
            $resultado = mysqli_query($conexion,$query);

?>
