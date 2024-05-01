<?php

include_once "obtenerRuta.php";

switch($uri){
    case "/pruebas/":
        $title = "Login";
        include_once ("views/app.php");
        break;
    case "/pruebas/views/registro.php":
        $title = "Registro";
        include_once ("views/registro.php");
        break;
    default:
        $title = "Error";
        include_once ("views/error.php");
        break;
}
    