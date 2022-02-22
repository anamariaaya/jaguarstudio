<?php

require '../../includes/funciones.php';
// $auth = estaAutenticado();

// if(!$auth){
//     header('Location: /');
// }

require '../../includes/config/database.php';
$db = conectarDB();

$consulta = "SELECT * FROM categorias";
$resultado = mysqli_query($db, $consulta);

$errores = [];
$categoriaId = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $creado = date('Y/m/d');
    $imagen = $_FILES['imagen'];
    $categoriaId = mysqli_real_escape_string( $db, $_POST['categoria'] );

    //Validar por tamaño (1.2Mb máximo)
    $medida = 1200 * 1000;

    if ($imagen['size'] > $medida){
        $errores[] = 'La imagen es muy pesada';
    }

    if(!$imagen['name'] || $imagen['error']){
        $errores[] = 'La imagen es obligatoria';
    }

    if(!$categoriaId){
        $errores[] = 'Elige una categoría';
    }

    if(empty($errores)){

        /*Subida de archivos */

        //Crear carpeta
        $carpetaImagenes = '../../images/';

        if(!is_dir($carpetaImagenes)){
            mkdir($carpetaImagenes);
        }

        //Generar un nombre único
        $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";



        // Subir la imagen
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

        $valuecat = intval($categoriaId);


        //Consultar la categoria
        if($valuecat === 1){
            $query = " INSERT INTO animals (nombre, creado) VALUES('$nombreImagen', '$creado')";
        }
        if($valuecat === 2){
            $query = " INSERT INTO brush (nombre, creado) VALUES('$nombreImagen', '$creado')";
        }
        if($valuecat === 3){

            $query = " INSERT INTO cartoon (nombre, creado) VALUES('$nombreImagen', '$creado')";
        }
        if($valuecat === 4){

            $query = " INSERT INTO dark (nombre, creado) VALUES('$nombreImagen', '$creado')";
        }
        if($valuecat === 5){

            $query = " INSERT INTO geometry (nombre, creado) VALUES('$nombreImagen', '$creado')";
        }
        if($valuecat === 6){

            $query = " INSERT INTO lettering (nombre, creado) VALUES('$nombreImagen', '$creado')";
        }
        if($valuecat === 7){

            $query = " INSERT INTO organic (nombre, creado) VALUES('$nombreImagen', '$creado')";
        }
        if($valuecat === 8){

            $query = " INSERT INTO oriental (nombre, creado) VALUES('$nombreImagen', '$creado')";
        }
        if($valuecat === 9){

            $query = " INSERT INTO portrait (nombre, creado) VALUES('$nombreImagen', '$creado')";
        }
        if($valuecat === 10){

            $query = " INSERT INTO sketch (nombre, creado) VALUES('$nombreImagen', '$creado')";
        }

        //Insertar en la DDBB

        $results = mysqli_query($db, $query);

        if($results) {
           //Redireccionar al usuario
            header('Location: /admin?resultado=1');
        // // } else{
        // //     echo '<script>alert."No se pudo crear la propiedad. Intenta de nuevo"</script>';
        }
    }
}


    incluirTemplate('adminheader');
?>

<main class="container">
    <h1>Nuevo Tattoo</h1>
    <a href="/admin" class="boton-verde">Volver al admin</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

    <form class="formulario container" method="POST" action="/admin/tattoos/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Imagen</legend>


                <label for="imagen">Seleccionar imagen:</label>
                <input
                    type="file"
                    id="imagen"
                    name="imagen"
                    accept="image/jpeg, image/png">
            </fieldset>

            <fieldset>
            <legend>Categoría</legend>
                <select name="categoria">
                    <option value="">--Elije Categoría</option>
                    <?php
                        while($categoria = mysqli_fetch_assoc($resultado)):
                        ?>
                        <option <?php echo $categoriaId === $categoria['id'] ? 'selected' : ''; ?>
                             value="<?php echo $categoria['id'];?>">
                            <?php echo $categoria['nombre']?>
                        </option>
                    <?php
                        endwhile;
                    ?>

                </select>

            </fieldset>

            <input type="submit" value="Crear Imagen" class="boton-amarillo">
        </form>

</main>

<?php
    incluirTemplate('footer');
?>