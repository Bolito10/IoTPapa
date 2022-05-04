<?php
include './conexion.php';

$usuario = $_POST['Usuario'];
$contrasena = $_POST['Password'];
session_start();
$_SESSION['Usuario'] = $usuario;

$consulta = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Contrasena = '$contrasena'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){
    $_SESSION['rol']=1;
    $_SESSION['ide']=$filas['id_usuario'];
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
      <title>Inicio de sesión | Logistica</title>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel='stylesheet' href='./Vistas/recursosModal.css'>
       <link rel='stylesheet'  href='./bootstrap-5.1.3/css/bootstrap.min.css'> 
       <script src='./bootstrap-5.1.3/js/bootstrap.bundle.min.js'></script>
          <script src='./ajax/libs/jquery/jquery.min.js'></script>

          <link rel='icon' type='image/png' href='./Imagenes/ico2.png'>

    </head>

<body>

<!-- Modal -->
<div class='modal fade' id='myModal' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true' style='background: linear-gradient(90deg, #1CB5E0 0%, #000851 100%);'>
  <!-- Vertically centered modal -->
  <div class='modal-dialog  modal-xl modal-dialog-centered' >
    <div class='modal-content' style=''>
  
      <div class='modal-body' style='text-align:center;margin:8px; '>

         <div>
            <img style='width:150px;height:150px' src='./Imagenes/logistica.jpeg'>
         </div>
          
         <div>
             <h1 align='center' class=''>Bienvenido  $filas[Usuario]</h1>
         </div>
                
         <div>
             <a class='btn text-primary' style='margin:5px;' href='./tabla.php' ><b> Aceptar</b> </a>
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
}

else{
    ?>
    
    <?php
    echo"<script>alert('Datos incorrectos, favor de verificar sus datos.'); window.location='./index.php'</script>";
    ?>

    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);