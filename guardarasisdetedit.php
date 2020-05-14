<?php
require_once("config/conexion.php");
include("modelo/Asistencia.php");
$asis = new Asistencia();

    $tableData =  $_POST['b'];         
    print_r ($tableData);
    $asis->editar_asistencia_detalle($tableData);
?>
