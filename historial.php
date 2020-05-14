<?php 
  require_once("config/conexion.php");
  require_once("modelo/Usuario.php");

  if(isset($_SESSION["correo"])){
    $usuario = new Usuario();
    $cursos = $usuario->getCursosDocente();
  }
  if (isset($_POST["export"])) {
    $usuario->getReport();
}  
?>

<?php require_once('vista/cabecera.php'); ?>
<style>
.wrapper-asistencia #content-wrapper {
  background-size: cover;
}
</style>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="docente-card text-white mb-3">
                <div class="card-body">
                    <h3 class="card-title text-center">Cursos asignados en el Periodo 2019-II</h3>
                    <div class="row h-100 text-center">
                        <div class="col-md-12 my-auto">
                          
                            <table class="table table-sm text-uppercase table-info-asistencia">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">Programa Profesional</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Curso</th>
                                <th scope="col">Opciones</th>
                              </tr>
                            </thead>
                            <?php
                                  
                                  foreach ($cursos as $curso) {
                                    echo "<tbody>";                                      
                                      echo "<tr>";                                      
                                            echo "<td scope='row'>" . $curso['escuela']."</td>
                                                  <td scope='row'>" . $curso['codasig']."</td>
                                                  <td scope='row'>" . $curso['asignatura']." G". $curso['grupo']."</td>                                      
                                                  <td>"."<button class='btn btn-success' data-toggle='modal' data-target='#modalLoginForm'>
                                                        <i class='fas fa-file-excel'></i> Exportar  Asistencia</button>"."</td>";
                                            
                                      echo "</tr>";
                                    echo "</tbody>";
                                  }

                                ?>
                            </table>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Modal -->
        <div class="modal fade modalExportarAsistencia" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Seleccione fecha de inicio y fecha de fin del reporte</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5 exportar-form">
                        <i class="fas fa-calendar col-md-2 fa-2x prefix grey-text"></i>
                        <input type="text" class="form-control col-md-9" name="daterange" value="08/08/2019 - 08/08/2019" />
                    </div>
                   
                </div>
                <div class="modal-footer d-flex justify-content-center">
                <form action="" method="post">
                <button type="submit" id="btnExport" name='export'
                    value="Export to Excel" class="btn btn-success"><a style="color: #fff;">Exportar a Excel</a></button>
                </form>
                <!--
                <button class="btn btn-danger"><a style="color: #fff;">Cancelar</a></button>
                <button class="btn btn-success"><a style="color: #fff;">Exportar</a></button>
                -->
                </div>
                </form>
                </div>
            </div>
        </div>

    <?php require_once('vista/footer.php'); ?>

 
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery/jquery.cookie.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="vendor/daterangepicker/js/moment.min.js"></script>
    <script src="vendor/daterangepicker/js/daterangepicker.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  
    
    <script>
        $(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left',
    minDate: '19/08/2019',
    maxDate: '20/12/2019',
    "applyButtonClasses": "btn-success",
    "cancelClass": "btn-danger",
    "buttonClasses": "btn btn-md",
    "locale": {
        "format": "DD/MM/YYYY",
        "separator": " - ",
        "applyLabel": "Exportar",
        "cancelLabel": "Cancelar",
        "fromLabel": "De",
        "toLabel": "Hasta",
        "customRangeLabel": "Custom",
        "daysOfWeek": [
            "Do",
            "Lu",
            "Ma",
            "Mi",
            "Ju",
            "Vi",
            "Sa"
        ],
        "monthNames": [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "DIciembre"
        ],
        "firstDay": 1
    }
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    $.cookie('f1', start.format('YYYY-MM-DD'));
    $.cookie('f2', end.format('YYYY-MM-DD'));
  });
});
    </script> 
  
    <!-- David-->
    <script>
    $('.table tbody').on('click','.btn', function(){
      var currow = $(this).closest('tr');
      var col1 = currow.find('td:eq(0)').text();
      var col2 = currow.find('td:eq(1)').text();
      var col3 = currow.find('td:eq(2)').text().toString();
      //var col4 = col3.substr(0,col3.length-3);
      var col5 = col3.substr(col3.length-1,1);
      //var result = col1+'\n'+col2+'\n'+col5;
      //alert(result);
      $.cookie('a', col1);
      $.cookie('b', col2);
      $.cookie('c', col5);
      $.cookie('d', currow.find('td:eq(2)').text());
      //sessionStorage._SESSION= "w1";
      //localStorage.setItem("w1",col1);
      //sessionStorage._SESSION = "w2";
      //localStorage.setItem("w2",col2);
      //sessionStorage._SESSION = "w3";
      //localStorage.setItem("w3",col5);
      //window.location = "modelo/Usuario.php?a="+col1+"&b"+col2+"&c"+col5;
      // $("#contenedor").load("historial.php",{col1, col2, col5}); 
      //$.post("modelo/Usuario.php" { a: col1, b: col2, c:col5 } );
       /* $.ajax({
            type: "POST",
            url: "modelo/Usuario.php",
            dataType: "json",
            data: ({a:col1, b:col2, c:col5}),
            success : function(data){
              alert(data);
            }
        });*/
      });
    </script>