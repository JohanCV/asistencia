<?php 
  require_once("config/conexion.php");
  require_once("modelo/Usuario.php");
  require_once("modelo/Asistencia.php");

  setlocale(LC_ALL,"es_ES");

  if(isset($_SESSION["codasignatura"]) && isset($_SESSION["correo"]) && isset($_SESSION["nombre"]) && isset($_SESSION["escuela"])){
    $usuario = new Usuario();
    $resul = $usuario->getCabeceraAsistencia();  

      if(isset($_POST["guardarCab"])){ 
        require_once('ajax/guardarasiscab.php');  
      }     

      $asis = new Asistencia();
          
      $id_cabecera = $asis->getIdCabecera($_SESSION["correo"], $_SESSION["codasignaturaCAb"], $_SESSION["grupo"]);
      //echo "idcabecera";
      //var_dump($id_cabecera);
      $_SESSION["id_cabeceraasis"]= $id_cabecera;

      require_once("config/asis.php");

      $rows = $asis->get_datos_asistencia_cabecera(); 
      foreach($rows as $row){
        $tema = $rows[14];
      }
      $rowdetalle = $asis->getFilasAsistenciaDetalle($id_cabecera);
      //echo"nfilas detalle: ";
      //var_dump($rowdetalle);
      
      

      //porcentaje prograteado en base a las semanas
      $porcentaje = $_SESSION["semana"]*100/17 ; 
      $rpta = number_format($porcentaje);   
?>
<?php require_once('vista/cabecera.php'); ?>
    

        <!-- Contenido de la página -->
        <div class="container-fluid">

          <!-- Información del docente -->
        
        <form method="POST" action="">
          <div class="docente-card text-white mb-3">
            <div class="card-body">
              <h3 class="card-title text-center">Control de Asistencia de Docentes</h3>
                <div class="row h-100 text-center">
                    <div class="col-md-8 my-auto">
                        <table class="table table-sm text-uppercase table-info-asistencia">
                            <tbody>
                                <tr>
                                  <th scope="row">Docente</th>
                                   <td><b><?= $_SESSION["nombre"] ?></b></td>
                                  
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
                                  <td class="h5"><b><?= $_SESSION["asignaturaCab"] ?></b></td>
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
                                  <td><?php $semanas=date("W"); $_SESSION["semana"]= $semanas -16;  echo $_SESSION["semana"]; ?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Tema de avance</th>
                                  
                                  <td><?php 
                                      if(empty($tema) || $tema == null){
                                        $tema = "no lleno tema";
                                      }
                                      echo $tema; 
                                  ?>
                                  </td>
                                  
                                </tr>
                                <tr>
                                  <th scope="row">% de Avance a la fecha</th>
                                  <td>
                                    <div class="progress progress-md mb-2">
                                      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $rpta?>" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                      <?php
                                        echo $rpta.' %';
                                        $_SESSION["porcentaje"]  = $rpta;
                                      ?>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <!--tr>
                                  <th scope="row">% de Avance de la sesión</th>
                                  <td>
                                      <input name="porcentaje" class="form-control form-control-sm" type="number" placeholder="00" style="display: inline-block; width: 50px;"> 
                                 </td>
                                </tr-->
                              	<?php //if(!isset($_POST["enviar"]) ): ?>
                                  <!--tr>                                                                   
                                  <th scope="row"></th>                                
                                    <td>
                                      <input type="hidden" name="enviar" class="form-control" value="guardadoCabe">
                                      <button type="submit" name="guardarCab" class="btn btn-success" id="saveCab"><i class="fas fa-fw fa-check"></i> Guardar Avance</button>
                                    </td>
                                  </tr-->
                                <?php // endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4 my-auto display-4">
                      <span style="font-size: 20px;" class="fecha-cabecera"></span> 
                      <h1 class="periodo-academico"></h1><hr>
                      <h3>Su sesión se cerrará en:</h3>
                      <div id="countdown" class="display-4 time-session"></div>
                    </div>
                </div>
            </div>
            </div>
        </form>
<!-- DataTales Example -->
          <!--form method="POST" action="resumen.php"> 
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">Lista de Alumnos</h6>
              </div>
              <div class="card-body">
                <div class=""-->
                
                <?php 
                  /*$_SESSION['asis']=array();
                    echo "<table borde='2' class='table table-bordered asistencia-lista'  id='dataTable' width ='100%' cellspacing='0' >";
                          echo "<thead>";
                          echo "<tr>";
                          echo "<th>N° </th>";
                          echo "<th>CUI </th>";
                          echo "<th>Nombres </th>";
                          echo "<th>Apellido Paterno</th>";
                          echo "<th>Apellido Materno</th>";
                          echo "<th>Asistencia</th>";
                          echo "</tr>";
                          echo "</thead>";

                          echo "<tbody>";

                          $i=1;
                          while ($columna2 = mysqli_fetch_array( $resultado2 )){                                  
                              // echo "<thead>";
                              echo "<tr>";

                                  echo   "<td>".$i ."</td>
                                  <td>".utf8_decode($columna2['cui']) ."</td>
                                  <td>".utf8_decode($columna2['nombre_s']) ."</td>
                                  <td>".utf8_decode($columna2['apellido_p'] )."</td>
                                  <td>".utf8_decode($columna2['apellido_m'])  ."</td>
                                  <td></td>";
                                  
                                  $i++; 
                              echo "</tr>";
                              // echo "<thead>";
                          }
                          echo "</tbody>";
                          echo "</table>"; // Fin de la tabla
                          // cerrar conexión de base de datos
                          mysqli_close( $conexion );
                          */
                  ?>         
                <!--/div>
                <div class="text-right">
                      <a href=""  class="btn btn-success" onclick="sendDataToPHP()">Guardar Asistencia</a>                 
                </div>
              </div>
              
            </div>
            </form>
        </div-->
        
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
      // if(distance < 10){
      //    sendDataToPHP(); 
      // }
      if (distance < 0) {
        clearInterval(timer);
        $el.text("Expiró!");
        location.reload();
        //window.location.replace("mensaje2");
        //return;
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

   <!-- DataTable -->
   <script>
    
    $('#dataTable').dataTable( {
      "info": false,
      "bPaginate": false,
      "language": {
        "search": "Buscar alumno:"
      }
    } );

    
    $(window).on('load', function() {
     // var countChecked = 0;
      var listAsistencia = $(".asistencia-lista tbody tr:not(.asistencia-check)");
      $(".asistencia-lista tbody tr:not(.asistencia-check)").each(function(e){
        
        var table = $(this).children().last();
        var html = '<section class="text-center">'+
        
        
                    '<form method="POST" class="ac-custom ac-radio ac-fill" autocomplete="off">'+
                      
                        '<ul id="p">'+
                          '<li><input id="r'+e+'" name="r'+e+'"  type="radio" value="P" ><label for="r'+e+'">Presente</label></li>'+
                        '</ul>'+
                        '<ul id="t">'+
                          '<li><input id="r'+e+1+'" name="r'+e+'" type="radio" value="T" ><label for="r'+e+1+'">Tardanza</label></li>'+
                        '</ul id="f">'+
                        '<ul class="item_asis">'+
                          '<li><input id="r'+e+2+'" name="r'+e+'"  type="radio" value="F"><label for="r'+e+2+'">Ausente</label></li>'+
                        '</ul>'+
                    '</form>'+
                  '</section>';     
                  
        table.append(html);
      });
      $.getScript("js/svgcheckbx.js");
       $.when($.getScript("js/svgcheckbx.js") ).done(function (e) {
         $("#dataTable tr td:last-child li:last-child input ").trigger("click");
       });  
    }); 
   
  </script>

  <!-- Custom scripts for radio buttons input -->
  <!-- <script src="js/svgcheckbx.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.9.0/d3.min.js"></script>
  <script type="text/javascript">
        
       function datosAsistencia(){   
        
        var TableData; 
        var arrayData =[];  
        
        var TableData = new Array();

        //if(typeof(idcabecera)==="undefined"){
          //alert("Estimado Docente, primero debe guardar su datos personales en la parte superior.");
        //}

        var data = "[";
        $('#dataTable tbody tr ').each(function(row, tr){
          var nrow = document.getElementById("dataTable").rows.length;
          var rowName = "r" + nrow.toString();
          var radios = document.getElementsByTagName('input');
          var value;
          
              data +="{ \"nombre\" : \"" + $(tr).find('td:eq(0)').text()+ "\""; // nombre
                data +=", \"apellidop\" : \"" +$(tr).find('td:eq(1)').text()+ "\""; // apellidop
                  data +=", \"apellidom\" :\""+ $(tr).find('td:eq(2)').text()+"\"";  // apellidom
                    // data +=", \"estado\" :\""+  document.querySelector('input:checked').value +"\"";
                    data +=", \"estado\" :\""+  $(tr).find("td:eq(3) input[type='radio']:checked").val() +"\"";
                    data +=", \"observacion\" :\" \"";
                    data +=", \"fk\" :\""+<?php echo  $id_cabecera;?>+"\""
                    +"}," // asistencia          
        arrayData.push(
         TableData[row] ={
              "cui": $(tr).find('td:eq(1)').text(), // cui
              "nombre": $(tr).find('td:eq(2)').text(), // nombre              
              "apellidop": $(tr).find('td:eq(3)').text(), // apellidop
              "apellidom": $(tr).find('td:eq(4)').text(),  // apellidom
              "estado": $(tr).find("td:eq(5) input[type='radio']:checked").val(), // asistencia     
              "observacion" :"observaciones" ,//observacion
              "fk" : <?php echo $id_cabecera;?>,//fk_cabecera    
          }
        );
        }); 
        //TableData.shift();  // first row is the table header - so remove
        data +="{}]";
        //TableData.push(data);
        //return data;
        // return data;
        return arrayData;
      }     

    function sendDataToPHP(){
        event.preventDefault();
        
        var TableData;
        TableData = datosAsistencia();
        console.log(TableData);
        $.ajax({
            type: 'post',
            url: 'guardarasisdet.php',
            data: {'b' : TableData},
            cache: false,
            success: function(msg){
              //alert(msg);     
              //window.location.replace("resumen.php");         
            }
        })
        .done(function( msg ) {
          //alert( "Data Saved: " + msg );
          window.location.replace("resumen.php");          
        });        
    }
    
  </script>
  
</body>

</html>

<?php 
  // }else{
  //     header("Location:".Conectar::ruta()."mensaje.php");
  // } 
  
}else{
  header("Location:".Conectar::ruta()."index.php");
}
?>
