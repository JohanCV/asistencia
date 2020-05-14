<?php require_once('vista/cabecera.php'); 
if(isset($_POST["cambiarPassword"]) and $_POST["cambiarPassword"]=="si"){

      require_once("modelo/Usuario.php");
      $usuario = new Usuario();
      $usuario->actualizarContrasenia($_POST["pass1"],$_POST["pass2"]);
      $estadocambio =  $usuario->getEstadoPass($_SESSION["correo"]);
      
}

?>

<style>
    .docente-card .card-body {
        background: #ffffffd1;
        color: #000;
    }
    .card-title {
        color: #fff;
    }
    .docente-card .card-body form {
        width: 500px;
        margin: 0 auto;
    }
    .wrapper-asistencia #content-wrapper {
        background-size: cover;
    }
</style>
        <!-- Begin Page Content -->
        <div class="container-fluid">
        
          <div class="docente-card text-white mb-3">
                <div class="card-body">
                    <h3 class="card-title text-center">Cambio de Contraseña</h3>
                    <div class="row h-100 text-center">
                        <div class="col-md-12 my-auto">
                        <?php // var_dump($estadocambio); 
			if(isset($estadocambio) &&  $estadocambio === 0 ):
			 ?>
                        <form class="password-form"  method="POST" action="">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nueva Contraseña</label>
                                <input name="pass1" type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña..." required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirmar Contraseña</label>
                                <input name="pass2" type="password" class="form-control" id="exampleInputPassword2" placeholder="Contraseña..." required>
                            </div>
                            <input type="hidden" name="cambiarPassword" class="form-control" value="si">
                            <?php if(isset($_SESSION["exitosochangepass"]) && $_SESSION["exitosochangepass"] == "no"):?>
                                <div class="alert alert-danger pass-alert" role="alert" style="display:none;">
                                    Las contraseñas deben ser iguales!
                                    <?php unset($_SESSION["exitosochangepass"]);?>
                                </div>
                            <?php endif;?>
                            <?php if(isset($_SESSION["exitosochangepass"]) && $_SESSION["exitosochangepass"] == "si"):?>
                                <div class="alert alert-success pass-success" role="alert" style="display:none;">
                                    Contraseña cambiada exitosamente!
                                    <?php unset($_SESSION["exitosochangepass"]);?>
                                </div>
                            <?php endif;?>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                        <?php else:?>
                            <div class="alert alert-success pass-success" role="alert" style="display:none;">
                                    Estimado Docente ud ya cambio su Contraseña. Si desea cambiar comuniquese con el administrador!
                            </div>
                        <?php endif;?>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <!-- /.container-fluid -->


    <?php require_once('vista/footer.php'); ?>
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="vendor/daterangepicker/js/moment.min.js"></script>
    <script src="vendor/daterangepicker/js/daterangepicker.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
            $(".pass-alert").slideDown();
            $(".pass-success").slideDown();
        });
    </script> 
  </body>
  
  </html>
  
