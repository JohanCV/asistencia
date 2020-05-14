<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicio.php">
      <div class="sidebar-brand-icon">
        <!-- <i class="fas fa-laugh-wink"></i> -->
        <img class="img-fluid" src="img/logo.png">
      </div>
      <div class="sidebar-brand-text mx-3">Asistencia</div>
    </a>
    <?php 
      require_once("config/conexion.php");
      require_once("modelo/Asistencia.php");
      $asis= new Asistencia();
      $nrowcabecera = $asis->get_asistencia_cabecera(); 
      $id_cabecera = $asis->getIdCabecera($_SESSION["correo"], $_SESSION["codasignaturaCAb"], $_SESSION["grupo"]);
           
      $numerofilasasistenciadetalle = $asis->getFilasAsistenciaDetalle($id_cabecera); 
      
      if(isset($_SESSION["correo"]) && $_SESSION["correo"] != "admin@gmail.com"){
    ?>
              <!-- Divider -->
              <hr class="sidebar-divider my-0">

              <!-- Divider -->
              <hr class="sidebar-divider">

              <!-- Heading -->
              <div class="sidebar-heading">
                Docente
              </div>

              <!-- Nav Item - Pages Collapse Menu -->
              
              <!--li class="nav-item">
                <a class="nav-link" href="password.php">
                  <i class="fas fa-fw fa-user"></i>
                  <span>Contraseña</span></a>
              </li-->
            <?php if($nrowcabecera == 0){?>
                    <li class="nav-item">
                      <a class="nav-link" href="asistencia.php">
                        <i class="fas fa-fw fa-clipboard-list"></i>
                        <span>Asistencia</span></a>
                    </li>
            <?php }else{ ?>
                    <?php if($numerofilasasistenciadetalle == 0){ ?>
                            <li class="nav-item">
                              <a class="nav-link" href="asistencias.php">
                                <i class="fas fa-fw fa-clipboard-list"></i>
                                <span>Asistencia</span></a>
                            </li>
                            
                    <?php }?>
                    <?php if($numerofilasasistenciadetalle > 0){?>
                            <li class="nav-item">
                              <a class="nav-link" href="asistenciaedit.php">
                                <i class="fas fa-fw fa-clipboard-list"></i>
                                <span>Asistencia</span></a>
                            </li>
                    <?php }?>
            <?php }?>
              <!-- Nav Item - Charts -->
              <!--li class="nav-item">
                <a class="nav-link" href="historial.php">
                  <i class="fas fa-fw fa-chart-area"></i>
                  <span>Historial de Asistencias</span></a>
              </li-->

    <?php }
          else{  ?>
              <li class="nav-item active">
                <a class="nav-link" href="inicio.php">
                  <i class="fas fa-fw fa-home"></i>
                  <span>Inicio</span></a>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider">

              <!-- Heading -->
              <div class="sidebar-heading">
                Administrador
              </div>

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="404.php">
                  <i class="fas fa-fw fa-chart-area"></i>
                  <span>Reportes</span>
                </a>
              </li>
        
      <?php  } ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
