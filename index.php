<?php
  if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
     
    
       require_once("modelo/Usuario.php");
       $usuario = new Usuario();
       
       
       //$usuario->login_mac($_GET["mac"]);
       $usuario->login();
       //var_dump($_GET["mac"]);
   }
?>
 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Asistencia - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary login-body">

  <div class="login-container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
      
        <div class="login-card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- informacion derecha -->
              <div class="col-lg-12 text-white">
              
                    <?php
                        if(isset($_GET["m"])){
                          switch($_GET["m"]){
                            case "1";
                            ?>
                              <div class="alert alert-danger alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h5><i class="icon fa fa-ban"></i> Estimado(a) docente por favor ingrese su cuenta de correo institucional.</h5>
                              
                              </div>
                            <?php 
                            break;

                            case "2";
                            ?>
                              <div class="alert alert-danger pass-alert" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h5><i class="icon fa fa-ban"></i>  Estimado(a) docente, Su llave, usuario y/o contraseña son incorrectos. Ingrese nuevamente sus datos.</h5>
                             
                              </div>
                            <?php 
                            break;

                            case "3";
                            ?>
                              <div class="alert alert-danger pass-alert" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                              <h5><i class="icon fa fa-ban"></i>  No se puede conectar desde la PC actual, comuniquese con el admdinistrador.</h5>
                              
                              </div>
                            <?php  
                            break;
                          }
                        }
                    
                    ?>
              
                <div style="padding:20px 40px;">
                <div class="text-center">
                  <img style="width: 115px;" src="img/logo.png" alt="">
                </div>
                <div class="text-center login-cabecera">
                  <h4 style="margin:0;">Vice rrectorado Académico</h4>
                  <h5>Dirección Universitaria de Formación Académica</h5>
                  <p style="font-size:21px; text-transform:uppercase;">Sistema de Registro de Asistencia Académica</p>
                </div>
                <hr style="border-color:#afafaf">
                  <div class="text-center">
                    <p class="login-text-title mb-4">Estimado(a) docente por favor ingrese su cuenta de correo institucional y su contraseña:</p>
                  </div>
                  <form method="POST" class="user user-form">
                    <div class="form-group">
                      <input type="email" name="correo" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ingrese Correo Electronico..." required autofocus>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                      <input type="hidden" name="enviar" class="form-control" value="si"><?php//  $mac= $_GET["mac"];  var_dump($mac);  ?>
                        
                      <input type="submit" class="btn btn-primary btn-user btn-block" value="Ingresar">
                      
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
