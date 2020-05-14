<?php
require_once("config/conexion.php");
include("modelo/Asistencia.php");
$asis = new Asistencia();

    $tableData =  $_POST['b'];         
    //$_SESSION["dataasis"]= $tableData;
    print_r($tableData);	
    $asis->registrar_asistencia_detalle($tableData);
?>
