<?php 
//conexion
$usuario = "root";
$password = "password";
$servidor = "localhost";
$basededatos = "dufa";

$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos"); 

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps!  no se ha podido conectar a la base de datos" );

  // $conexion = new Conectar();
    //$conex = $conexion->conexion();

    $codAsig = $_SESSION["codasignaturaCAb"];
    $correo = $_SESSION["correo"];
    $grupo = $_SESSION["grupo"];
    $dia = $_SESSION["dia"];

    $resultado_sql2 ="SELECT distinct m.cui cui, m.nombre nombre_s,m.paterno apellido_p,m.materno apellido_m
    FROM`dutic_matriculados_19` m,`dutic_docentes_19` d,`dutic_horarios_19` h 
    where 
    m.codasig=d.codasig and
    h.codasig=d.codasig and
    d.codasig='{$codAsig}' and 
    d.correo= '{$correo}'  and
    m.escuela=d.escuela and 
    
    m.grupo='{$grupo}' and
    h.dia='{$dia}' ORDER BY m.paterno ASC";

    
    $resultado2 = mysqli_query( $conexion, $resultado_sql2 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    
//    if(isset($_POST["enviaredicion"]) && isset($_POST["enviaredicion"]) == "edit"){
      $idcabecera = $_SESSION["id_cabecera"][0];
      //var_dump($idcabecera);
      if ($idcabecera == null){
        //echo "entre al null";
        $idcabecera = (empty($_SESSION["idcabeceracontinuo"][0]))?$_SESSION["id_cabeceraasis"]:$_SESSION["idcabeceracontinuo"][0];
        //var_dump($idcabecera);
        $sql2 ="SELECT cui, nombres, apellidop, apellidom, estado FROM `asistencia_detalle` WHERE fk_asistencia_cabecera ='{$idcabecera}'  ORDER BY `asistencia_detalle`.`apellidop` ASC ";
        $resultadoAsisEdit = mysqli_query( $conexion, $sql2 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
      }else{
        $sql2 ="SELECT cui, nombres, apellidop, apellidom, estado FROM `asistencia_detalle` WHERE fk_asistencia_cabecera ='{$idcabecera}'  ORDER BY `asistencia_detalle`.`apellidop` DESC ";
        $resultadoAsisEdit = mysqli_query( $conexion, $sql2 ) or die ( "Algo ha ido mal en la consulta a la base de datos");
      }
//    }

?>
