<?php
 require_once("../config/conexion.php");
    
    if(isset($_SESSION["codasignatura"]) && isset($_SESSION["correo"]) && isset($_SESSION["nombre"]) && isset($_SESSION["escuela"])){
        unset($_SESSION["codasignatura"]);
        unset($_SESSION["correo"]);
        unset($_SESSION["nombre"]);
        unset($_SESSION["escuela"]); 
       
        unset($_SESSION["facultadCab"]);
        unset($_SESSION["escuelaCab"]); 
        unset($_SESSION["asignaturaCab"] );
        unset($_SESSION["codasignaturaCAb"] );
        unset($_SESSION["grupo"]);
        unset($_SESSION["aula"] );
        unset($_SESSION["dia"]);
        unset($_SESSION["hora_inicial"] );
        unset($_SESSION["hora_final"]  );           
        unset($_SESSION["nombreCab"]);
                
        unset($_SESSION["id_cabecera"][0]);
	    unset($_SESSION["idcabeceracontinuo"][0]);
        
    }
    session_destroy();
    //header("Location:".Conectar::ruta()."index.php?mac=".$_SESSION["mac"]);
    header("Location:".Conectar::ruta()."index.php");
    exit();   

?>
