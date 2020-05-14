<?php require_once('vista/cabecera.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="docente-card text-white mb-3">
                <div class="card-body">
                    <h3 class="card-title text-center">Reporte de Asistencias</h3>
                    <div class="row h-100 text-center">
                        <div class="col-md-6 my-auto">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Seleccione el periodo: </label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                    <option>2019-II</option>
                                    <option>2019-I</option>
                                    <option>2018-II</option>
                                    <option>2018-I</option>
                                    <option>2017-II</option>
                                    <option>2017-I</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Seleccione el curso: </label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                    <option>RAZONAMIENTO LOGICO MATEMATICO</option>
                                    <option>MATEMATICA BASICA	</option>
                                    <option>ESTRUCTURAS DISCRETAS 1</option>
                                    <option>INTRODUCCION A LA COMPUTACION</option>
                                    <option>FUNDAMENTOS DE LA PROGRAMACION 1</option>
                                    </select>
                                </div>
                            </form>
                            </div>
                            <div class="col-md-6 my-auto">
                            <form>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Seleccione el grupo: </label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    </select>
                                </div>
                            </form>
                            
                        </div>
                        <div class="col-md-12 my-auto">
                        <table class="table table-sm text-uppercase table-info-asistencia text-white">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">CÓDIGO</th>
                            <th scope="col">ALUMNO</th>
                            <th scope="col">ASISTENCIAS</th>
                            <th scope="col">TARDANZAS</th>
                            <th scope="col">FALTAS</th>
                            </tr>
                        </thead>  
                            <tbody>
                                <tr>
                                    <td>1701102</td>
                                    <td>PEDRO ALONSO PEREZ DELGADO</td>
                                    <td>14</td>
                                    <td>3</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1701102</td>
                                    <td>PEDRO ALONSO PEREZ DELGADO</td>
                                    <td>14</td>
                                    <td>3</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1701102</td>
                                    <td>PEDRO ALONSO PEREZ DELGADO</td>
                                    <td>14</td>
                                    <td>3</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1701102</td>
                                    <td>PEDRO ALONSO PEREZ DELGADO</td>
                                    <td>14</td>
                                    <td>3</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1701102</td>
                                    <td>PEDRO ALONSO PEREZ DELGADO</td>
                                    <td>14</td>
                                    <td>3</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Modal -->
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Exportar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-calendar prefix grey-text"></i>
                        <input type="text" class="form-control" name="daterange" value="01/01/2018 - 01/15/2018" />
                    </div>

                    <!-- <div class="md-form mb-4">
                        <i class="fas fa-calendar prefix grey-text"></i>
                        <input id="datepicker" />
                    </div> -->
                </div>
                <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-primary"><a href='reporte.xlsx' style="color: #fff;">Exportar</a></button>
                </div>
                </div>
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
  </body>
  
  </html>
  