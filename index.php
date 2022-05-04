<html lang="es">
  <head>
  <link rel="icon" type="image/png" href="./Imagenes/logistica.jpeg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="Imagenes/ico2.png">

    <title>Iniciar Sesion | Hospital San Pablo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!--CSS-->
    <style>
                
        body {
          height: 100%;
        }

        body {
          display: -ms-flexbox;
          display: -webkit-box;
          -ms-flex-align: center;
          -ms-flex-pack: center;
          -webkit-box-align: center;
          align-items: center;
          -webkit-box-pack: center;
          justify-content: center;
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #f5f5f5;
        }

        .form-signin {
          width: 100%;
          max-width: 330px;
          padding: 15px;
          margin: 0 auto;
        }
        .form-signin .checkbox {
          font-weight: 400;
        }
        .form-signin .form-control {
          position: relative;
          box-sizing: border-box;
          height: auto;
          padding: 10px;
          font-size: 16px;
        }
        .form-signin .form-control:focus {
          z-index: 2;
        }
        .form-signin input[type="email"] {
          margin-bottom: -1px;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
          margin-bottom: 10px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }

    </style>
  </head>

  <body class="text-center">
    <form class="form-signin" action="./validar.php" method="post">
      <img class="mb-4" src="./Imagenes/logistica.jpeg" alt="" width="130" height="130">
      <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesion</h1>
      <label for="inputEmail" class="sr-only">Usuario</label>
      <input type="text" id="Usuario" name="Usuario" class="form-control" placeholder="Usuario" required autofocus>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="Password" name="Password" class="form-control" placeholder="Contraseña" required>
      
      <button class="btn btn-lg  btn-block btn-primary" type="submit"  value="Ingresar">Iniciar Sesion</button>
      <p class="mt-5 mb-3 text-muted">&copy; Desarrollado por alumnos del ITT</p>
      <div class="modal fade" id="modal1" role="dialog">
    
    </form>
    
    
    <script src="jQuery/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

  
  
</html>