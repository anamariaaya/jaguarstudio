<?php

require '../../includes/funciones.php';
// $auth = estaAutenticado();

// if(!$auth){
//     header('Location: /');
// }

require '../../includes/config/database.php';
$db = conectarDB();


    incluirTemplate('adminheader');
?>

<main class="contenedor">
    <h1>Actualizar Tattoo</h1>

</main>

<?php
    incluirTemplate('footer');
?>