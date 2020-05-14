<?php

require_once("../config/conexion.php");
require_once("../modelo/Usuario.php");

    class UsuarioController {

        public function logout(){
            if(isset($_SESSION["codasignatura"]) && isset($_SESSION["correo"]) && isset($_SESSION["nombre"]) && isset($_SESSION["escuela"])){
                unset($_SESSION["codasignatura"]);
                unset($_SESSION["correo"]);
                unset($_SESSION["nombre"]);
                unset($_SESSION["escuela"]);

                session_destroy();
                header("Location:".Conectar::ruta()."index.php");
                exit();
            }
        }    
    }

?>