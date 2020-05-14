<?php 
  require_once("config/conexion.php");
  require_once("modelo/Asistencia.php");

  // if(isset($_SESSION["codasignatura"]) && isset($_SESSION["correo"]) && isset($_SESSION["nombre"]) && isset($_SESSION["escuela"])){
    $asis = new Asistencia();

if(isset($_SESSION["id_cabeceraasis"])){
        $action = "asistenciaedit.php";
    }else{
        $action = "asistencias.php";
    }
    
?>

<?php require_once('vista/cabecera.php'); ?>

<!-- Contenido de la página -->
<div class="container-fluid">

<!-- Información del docente -->
<div class="docente-card text-white mb-3">
  <div class="card-body">
      <h3 class="card-title text-center">Control de Asistencia</h3>
      <div class="row h-100 text-center">
          <div class="col-md-8 my-auto">
          <form method="POST" action=<?=$action; ?> >
              <table class="table table-sm text-uppercase table-info-asistencia text-white">
                  <tbody>
                      <tr>
                        <th scope="row">Docente</th>
                        <td><b><?= $_SESSION["nombreCab"] ?></b></td>
                      </tr>
                      <tr>
                        <th scope="row">Facultad</th>
                        <td><?= $_SESSION["facultadCab"] ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Programa Profesional</th>
                        <td><?= $_SESSION["escuelaCab"] ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Curso</th>
                        <td><?= $_SESSION["asignaturaCab"] ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Código del Curso</th>
                        <td><?= $_SESSION["codasignaturaCAb"] ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Grupo del Curso</th>
                        <td><?= $_SESSION["grupo"] ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Aula</th>
                        <td><?= $_SESSION["aula"] ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Semana</th>
                        <td scope="row"><?php $semanas=date("W"); $semana= $semanas -33;  echo $semana; ?></td>                        
                      </tr>
                      <tr>
                        <th scope="row">Tema</th>
                        <td>
                          <?php $row = $asis->get_datos_asistencia_cabecera();  $tema = $row[14]; $_SESSION["theme"]= $tema; echo $tema; ?>
                        </td>
                      </tr>
                      <!--tr>
                        <th scope="row">Porcentaje</th>
                        <td>
                          <?php// $row = $asis->get_datos_asistencia_cabecera();  $tema = $row[15]; print_r($tema); ?>
                        </td>
                      </tr-->
                      
                      <tr>
                        <th scope="row">N° Asistencias</th>
                        <td>
                          <?= $asis->getCountEstadoAsistencia('P', $_SESSION["id_cabeceraasis"]) ?>
                        </td>
                      </tr>
                      <tr>
                          <th scope="row">N° de Tardanzas</th>
                          <td>
                          <?= $asis->getCountEstadoAsistencia('T', $_SESSION["id_cabeceraasis"])  ?>
                          </td>
                      </tr>
                      <tr>
                          <th scope="row">N° de Faltas</th>
                          <td>
                          <?= $asis->getCountEstadoAsistencia('F', $_SESSION["id_cabeceraasis"])?>
                          </td>
                          </tr>
                  </tbody>
              </table>
           
          </div>
          <div class="col-md-4 my-auto display-4">
            <h1>Periodo Académico 2019-II</h1><hr>
            <h3 class="text-white">Su sesión se cerrará en:</h3>
            <div id="countdown" class="display-4 time-session"></div>
            <input type="hidden" name="enviaredicion" class="form-control" value="edit">
            <a href=""><button class="btn btn-success"><i class="fas fa-fw fa-pen"></i> Editar Asistencia</button></a> 
          </div>
          </form>   
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

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <!-- Custom scripts for radio buttons input -->
  <script src="js/svgcheckbx.min.js"></script>

  <!-- Cronometro -->
  <script>
    var horaFinal = '<?=  $_SESSION["hora_final"];?>';
  
    var end = new Date(<?= date("Y");?>,<?= date("m")-1;?>,<?= date("d");?>,horaFinal.split(":")[0],horaFinal.split(":")[1],0);
    // console.log(end);

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
      var now = new Date();
      var distance = end - now;
      var $el = $("#countdown");

      if (distance < 0) {
        clearInterval(timer);
        $el.text("Expiró!");
        location.reload();
        // return;
      }
      var days = Math.floor(distance / _day);
      var hours = Math.floor((distance % _day) / _hour);
      var minutes = Math.floor((distance % _hour) / _minute);
      var seconds = Math.floor((distance % _minute) / _second);
      // if (hours<10){
      //   hours = 
      // }
      $("#countdown").html(hours + ':' + minutes + ':' + seconds);
    }

    timer = setInterval(showRemaining, 1000);
  </script>



  <script>
    $('#dataTable').dataTable( {
      "language": {
        "search": "Buscar",
        "Show ": "Mostrar"
      }
    } );
  </script>

</body>

</html>

<?php 
  // }else{
  //   header("Location:".Conectar::ruta()."index.php");
  // }
?>
