<?php

require 'app.php';

function incluirTemplate( string $nombre, bool $inicio = false, bool $tattoos = false, bool $artwork = false, bool $prensa = false, bool $contacto = false ){
    include TEMPLATES_URL."/${nombre}.php";
}

function estaAutenticado(): bool {
    session_start();

    $auth = $_SESSION['login'];    
    if($auth){
       return true;
    }
    return false;
}