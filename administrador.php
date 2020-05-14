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
                                    <label for="exampleFormControlSelect1">Seleccione la facultad</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Facultad de Ingeniería de Produccion y Servicios</option>
                                    <option>Facultad de Administración</option>
                                    <option>Facultad de Agronomía</option>
                                    <option>Facultad de Arquitectura</option>
                                    <option>Facultad de Ciencias Biológicas</option>
                                    </select>
                                </div>
                            </form>
                            </div>
                            <div class="col-md-6 my-auto">
                            <form>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Seleccione el Programa Profesional</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12 my-auto">
                        <table class="table table-sm text-uppercase table-info-asistencia text-white">
                        <h2 class="table-header">Primer Semestre</h2>
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">C</th>
                            <th scope="col">CASI</th>
                            <th scope="col">ASIGNATURA</th>
                            <th scope="col">ALUMNOS</th>
                            <th scope="col">%ASISTENCIAS</th>
                            <th scope="col">%TARDANZAS</th>
                            <th scope="col">%FALTAS</th>
                            </tr>
                        </thead>  
                            <tbody>
                                <tr>
                                    <td>D</td>
                                    <td>1701102</td>
                                    <td>RAZONAMIENTO LOGICO MATEMATICO</td>
                                    <td>160</td>
                                    <td>36%</td>
                                    <td>60%</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>D</td>
                                    <td>1701102</td>
                                    <td>RAZONAMIENTO LOGICO MATEMATICO</td>
                                    <td>160</td>
                                    <td>36%</td>
                                    <td>60%</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>D</td>
                                    <td>1701102</td>
                                    <td>RAZONAMIENTO LOGICO MATEMATICO</td>
                                    <td>160</td>
                                    <td>36%</td>
                                    <td>60%</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>D</td>
                                    <td>1701102</td>
                                    <td>RAZONAMIENTO LOGICO MATEMATICO</td>
                                    <td>160</td>
                                    <td>36%</td>
                                    <td>60%</td>
                                    <td>4%</td>
                                </tr>
                                <tr>
                                    <td>D</td>
                                    <td>1701102</td>
                                    <td>RAZONAMIENTO LOGICO MATEMATICO</td>
                                    <td>160</td>
                                    <td>36%</td>
                                    <td>60%</td>
                                    <td>4%</td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-sm text-uppercase table-info-asistencia text-white">
                        <h2 class="table-header">Segundo Semestre</h2>
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">C</th>
                                <th scope="col">CASI</th>
                                <th scope="col">ASIGNATURA</th>
                                <th scope="col">ALUMNOS</th>
                                <th scope="col">%ASISTENCIAS</th>
                                <th scope="col">%TARDANZAS</th>
                                <th scope="col">%FALTAS</th>
                                </tr>
                            </thead>  
                                <tbody>
                                    <tr>
                                        <td>D</td>
                                        <td>1701102</td>
                                        <td>RAZONAMIENTO LOGICO MATEMATICO</td>
                                        <td>160</td>
                                        <td>36%</td>
                                        <td>60%</td>
                                        <td>4%</td>
                                    </tr>
                                    <tr>
                                        <td>D</td>
                                        <td>1701102</td>
                                        <td>RAZONAMIENTO LOGICO MATEMATICO</td>
                                        <td>160</td>
                                        <td>36%</td>
                                        <td>60%</td>
                                        <td>4%</td>
                                    </tr>
                                    <tr>
                                        <td>D</td>
                                        <td>1701102</td>
                                        <td>RAZONAMIENTO LOGICO MATEMATICO</td>
                                        <td>160</td>
                                        <td>36%</td>
                                        <td>60%</td>
                                        <td>4%</td>
                                    </tr>
                                    <tr>
                                        <td>D</td>
                                        <td>1701102</td>
                                        <td>RAZONAMIENTO LOGICO MATEMATICO</td>
                                        <td>160</td>
                                        <td>36%</td>
                                        <td>60%</td>
                                        <td>4%</td>
                                    </tr>
                                    <tr>
                                        <td>D</td>
                                        <td>1701102</td>
                                        <td>RAZONAMIENTO LOGICO MATEMATICO</td>
                                        <td>160</td>
                                        <td>36%</td>
                                        <td>60%</td>
                                        <td>4%</td>
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
  