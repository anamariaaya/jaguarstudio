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
    <h1>Nuevo Tattoo</h1>
    <a href="/admin" class="boton-verde">Volver al admin</a>

    <form class="formulario" method="POST" action="/admin/tattoos/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>
                

                <label for="imagen">Imagen:</label>
                <input
                    type="file"
                    id="imagen"
                    name="imagen"
                    accept="image/jpeg, image/png">

            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton-amarillo">
        </form>

</main>

<?php
    incluirTemplate('footer');
?>