<?php

function conectarDB(): mysqli{
    $db = mysqli_connect('localhost', 'root', 'root', 'jaguarstudio');
    
    mysqli_set_charset($db, 'utf8mb4');

    if(!$db){
        echo "Error, no se pudo conectar";
        exit;
    }
    return $db;
}