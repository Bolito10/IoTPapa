<?php
include './conexion.php';
session_start();
$varsesion = $_SESSION['Usuario'];//Traer usuario
$rol = $_SESSION['rol'];//Traer rol
	if($varsesion == null || $varsesion = ''){
		session_destroy();
		echo"<!DOCTYPE html>
    <html lang='es'>
    <head>
      <title>Advertencia</title>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
       <link rel='stylesheet' href='./recursosModal.css'>
       <link rel='stylesheet'  href='./bootstrap-5.1.3/css/bootstrap.min.css'> 
       <script src='./bootstrap-5.1.3/js/bootstrap.bundle.min.js'></script>
       <script src='./ajax/libs/jquery/jquery.min.js'></script>
       <link rel='icon' type='image/png' href='./Imagenes/ico2.png'>
    </head>
       <body>
       
       <div class='container '>
   
       <!-- Modal -->
       <div class='modal fade' id='myModal' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true' style='background: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);'>
         <!-- Vertically centered modal -->
         <div class='modal-dialog  modal-xl modal-dialog-centered' >
           <div class='modal-content' style=''>
         
             <div class='modal-body' style='text-align:center;margin:8px; '>
       
                <div>
                   <img style='width:100px;height:100px' src='./imagenes/warnning.png'>
                </div>
                 <br>
                <div>
                    <h2 align='center' class=''>Usted no esta autorizado para este contenido</h2>
                    <h4>Verifica tu sesión</h4>
                </div>
                       
                <div>
                    <a class='btn text-primary' style='margin:5px;' href='./index.php' ><b> Aceptar</b> </a>
                </div>
       
       
             </div>
             
           </div>
         </div>
       </div>
   
   
       <!--MOSTRAR MODAL AL CARGAR PÁGINA-->
           <script>
       
             $( document ).ready(function() {
                   $('#myModal').modal('show');
             });
           </script>
       </body>
       </html>";
		die();
	}
	
?>

<html lang="en">
<head>
  <title>BITACORA DE CARGA DE VIGILANTE</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="./Imagenes/logistica.jpeg">
  <meta name="viewport" content="width=device-width, initial-scale=1 , shrink-to-fit=no">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet"  href="./bootstrap-5.1.3/css/bootstrap.min.css"> 
 <link rel = "stylesheet" type="text/css" href="../css/bootstrap.min.css">
 <script src="./ajax/libs/jquery/jquery.min.js"></script>	
<script src="./jQuery/jquery-3.5.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-tr">
                      <a class="navbar-brand" href="#"><img src ="./Imagenes/logistica.jpeg" style="border-radius: 50%;" width="150" heigth="150" ></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                          <div class="navbar-nav">
                            <a class="nav-item nav-link" href="Registros.php">VER REGISTROS</a>
                            <li class="nav-item dropdown position-absolute end-0">
                                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              José Luis Ibarra Casiano 
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="./cerrarsesion.php"><img style="width:15px;height: 15px;" src="./Imagenes/icons/salir.png">&nbsp;&nbsp;Cerrar sesión</a>
                                </div>
                              </li>
                          </div>
                        </div>
                  </nav>
<br>
<div align="center">
  <h1>BITACORA DE CARGA VIGILANTE </h1>
</div>
<?php 
        $buscador = mysqli_query($conexion,"SELECT * FROM seguimiento order by hora desc limit 1;");
              
      ?>
    <?php while ($resultado = mysqli_fetch_assoc($buscador)){ ?>
<tr>
  <pre>
    <?php $latitudmaps = $resultado['latitud'];
          $longitudmaps = $resultado['longitud'];
    ?>
  </pre>
  <div id="map" style="height:400px;width:100%"></div>
  
<script>
  function iniciarMap(){
    var coord = {lat:<?=$latitudmaps?> ,lng:<?=$longitudmaps?> };
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbsBDN5TgQ_Bln8QG1ahBagjE6KyCLNdw&callback=iniciarMap" async defer></script>
<br>
<h3>Este apartado me muestra los últimos 10 registros del vehiculo que lleva la carga, mostrandonos la ultima localización registrada en el mapa.</h3>
<?php }?>
<?php 
        $buscador2 = mysqli_query($conexion,"SELECT * FROM seguimiento order by hora desc limit 10;");
             
      ?>

<div class="table-responsive ">
		<table class="table table-bordered table-hover " style="text-align:center;">
		<thead class="thead-dark">
			<tr>
			<th scope="col" style="vertical-align:middle;">Contenedor</th>
			<th scope="col">Fecha</th>
			<th scope="col">Hora</th>
			<th scope="col">Temperatura</th>
      <th scope="col">Humedad</th>
			<th scope="col" style="vertical-align:middle;">Templiquido</th>
			<th scope="col" style="vertical-align:middle;">Latitud</th>
            <th scope="col" style="vertical-align:middle;">Longitud</th>
            <th scope="col" style="vertical-align:middle;">Altitud</th>
            <th scope="col" style="vertical-align:middle;">Rumbo</th>
            <th scope="col" style="vertical-align:middle;">Velocidad</th>
            <th scope="col" style="vertical-align:middle;">Satelites</th>
            
			</tr>
		</thead>
		<tbody>
    <?php while ($resultado2 = mysqli_fetch_assoc($buscador2)){ ?>
    <td style="vertical-align:middle;"><?php echo $resultado2["contenedor"]; ?></td>
    <td style="vertical-align:middle;"><?php echo $resultado2["fecha"]; ?></td>
    <td style="vertical-align:middle;"><?php echo $resultado2["hora"]; ?></td>
    <td style="vertical-align:middle;"><?php echo $resultado2["temperatura"]; ?></td>
    <td style="vertical-align:middle;"><?php echo $resultado2["humedad"]; ?></td>
    <td style="vertical-align:middle;"><?php echo $resultado2["templiquido"]; ?></td>
    <td style="vertical-align:middle;"><?php echo $resultado2["latitud"]; ?></td>
    <td style="vertical-align:middle;"><?php echo $resultado2["longitud"]; ?></td>
    <td style="vertical-align:middle;"><?php echo $resultado2["altitud"]; ?></td>
    <td style="vertical-align:middle;"><?php echo $resultado2["rumbo"]; ?></td>
    <td style="vertical-align:middle;"><?php echo $resultado2["velocidad"]; ?></td>
    <td style="vertical-align:middle;"><?php echo $resultado2["satelites"]; ?></td>
    
</tr>

<?php }?>

		
		</tbody>
		</table>
		
		</div>
    <div align="center" style="margin-top:100px; margin-bottom:-10px;">
  <footer class="page-footer font-small blue pt-4"  >
        <div class="container-fluid text-center text-md-left"  >
          <div class="row" style="background-color: black">
                  <div class="col-xl-12" align="center" >
                      <h5 class="text-uppercase" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; color: white">Desarrollado por alumnos del ITT&nbsp;&nbsp;<img src="./Imagenes/icons/des.png" style="width:30px;height:30px;">&nbsp;&nbsp;</h5>
                      <div class="footer-copyright text-center py-3" style="color: white" >© 2022 Copyright</div>
                  </div>
            
            </div>
        
      </div>
        
  </footer>
	</div>
</body>
</html>