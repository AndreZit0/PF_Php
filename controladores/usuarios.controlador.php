<?php

class ControladorUsuarios{

    public function ctrIngresoUsuario(){
        if (isset($_POST["ingEmail"])){
            if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_POST["ingEmail"]) && preg_match("/^[a-zA-Z0-9]+$/",$_POST["ingPassword"])){

                    $tabla = "usuarios";
                    $item = "email";
                    $valor = $_POST["ingEmail"];

                    $respuesta=ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

                    if ($respuesta["email"] == $_POST["ingEmail"] && $respuesta["clave"]==$_POST["ingPassword"] && $respuesta["estado"]=="activo"){

                        $_SESSION["iniciarSesion"] = "ok";
                        $_SESSION["idUsuario"]=$respuesta["idusuarios"];
                        $_SESSION["nombres"]=$respuesta["nombres"];
                        $_SESSION["apellidos"]=$respuesta["apellidos"];
                        $_SESSION["idRol"]=$respuesta["rol_idrol"];

                    }

                }//fn del pregmatch

        }



    }//Fin método ingreso de usuario



}//FIN DE CLASE USUARIOS