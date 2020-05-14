<?php 
  require_once("config/conexion.php");
  require_once("modelo/Usuario.php");

  if(isset($_SESSION["codasignatura"]) && isset($_SESSION["correo"]) && isset($_SESSION["nombre"]) && isset($_SESSION["escuela"])){
    $usuario = new Usuario();
    $users =$usuario->getCursosDocente();
  

?>
<?php require_once('vista/cabecera.php'); ?>
<style>
.wrapper-asistencia #content-wrapper {
  background-size: cover;
}
</style>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Texto NO hay clase programada -->
          <div class="text-center message-text" style="margin-top: 50px;">
            <i class="fas fa-sad-cry fa-6x"></i> 
            <p class="lead text-gray-800 mb-5">Lo sentimos, ahora no tiene una clase programada.</p>
            <p class="text-gray-500 mb-0"></p>
          </div>
        </div>


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
        });
    </script> 
  
<?php 
   }else{
    header("Location:".Conectar::ruta()."index.php");
  }
?>