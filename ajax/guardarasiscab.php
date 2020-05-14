<?php
require_once("modelo/Asistencia.php");
$asistencia = new Asistencia();

$row = $asistencia->get_asistencia_cabecera();
    if(isset($_POST["guardarCab"])){
        //$row =0;
        
        $asis = $asistencia->registrar_asistencia_cabecera($row,$_SESSION["nombreCab"],$_SESSION["facultadCab"],$_SESSION["escuelaCab"],$_SESSION["asignaturaCab"],$_SESSION["codasignaturaCAb"],$_SESSION["grupo"],$_SESSION["hora_inicial"],$_SESSION["hora_final"],$_SESSION["dia"], $_SESSION["correo"],$_SESSION["aula"],$_SESSION["semana"],$_POST["tema"],$_SESSION["porcentaje"]);
           
        if(isset($_SESSION['estadoRegistroCab']) && $_SESSION['estadoRegistroCab'] == true){
            $_SESSION["id_cabecera"] = $asistencia->getIdCabecera($_SESSION["escuelaCab"],$_SESSION["asignaturaCab"],$_SESSION["codasignaturaCAb"],$_SESSION["grupo"]);
        
        }  
             
    }else{
        if($row != 0){
            $_SESSION["idcabeceracontinuo"]=$asistencia->getIdCabecera($_SESSION["escuelaCab"],$_SESSION["asignaturaCab"],$_SESSION["codasignaturaCAb"],$_SESSION["grupo"]);    
        }
        
    } 

?>