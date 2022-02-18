<?php

require '../includes/funciones.php';
// $auth = estaAutenticado();

// if(!$auth){
//     header('Location: /');
// }

require '../includes/config/database.php';
$db = conectarDB();

$animals = "SELECT * FROM animals";
$brush = "SELECT * FROM brush";
$cartoon = "SELECT * FROM cartoon";
$dark = "SELECT * FROM dark";
$geometry = "SELECT * FROM geometry";
$lettering = "SELECT * FROM lettering";
$organic = "SELECT * FROM organic";
$oriental = "SELECT * FROM oriental";
$portrait = "SELECT * FROM portrait";
$sketch = "SELECT * FROM sketch";


$res_animals = mysqli_query($db, $animals);
$res_brush = mysqli_query($db, $brush);
$res_cartoon = mysqli_query($db, $cartoon);
$res_dark = mysqli_query($db, $dark);
$res_geometry = mysqli_query($db, $geometry);
$res_lettering = mysqli_query($db, $lettering);
$res_organic = mysqli_query($db, $organic);
$res_oriental = mysqli_query($db, $oriental);
$res_portrait = mysqli_query($db, $portrait);
$res_sketch = mysqli_query($db, $sketch);


    incluirTemplate('adminheader');
?>

<main class="container">
    <div class="admin">
        <h1>Tattoos</h1>

        <!--Animals-->
        <div class="admin-table">
            <h2>Animals</h2>
            <a href="/admin/tattoos/crear.php" class="boton-verde">Nueva Imagen</a>
            <table class="admin-info">
                <thead>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </thead>

                <tbody> <!--Mostrar los resultados-->
                <?php while($animals = mysqli_fetch_assoc($res_animals)): ?>
                    <tr>
                        <td> <?php echo $animals['id']; ?> </td>

                        <td><img class="imagen-tabla" src="/images/<?php echo $animals['nombre'];?>"></td>    

                        <td> <?php echo $animals['creado']; ?> </td>

                        <td>

                            <!--Eliminar la imagen-->
                            <form method="POST" class="w-100">
                                <input type="hidden" name="id" value="<?php echo $animals['id'];?> ">

                                <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>

                            <a class="boton-amarillo-block" href="/admin/tattoos/actualizar.php?id=<?php echo $animals['id']; ?>">Actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>

        </div>

        <!--Brush-->
        <div class="admin-table">
            <h2>brush</h2>
            <a href="/admin/tattoos/crear.php" class="boton-verde">Nueva Imagen</a>
            <table class="admin-info">
                <thead>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </thead>

                <tbody> <!--Mostrar los resultados-->
                <?php while($brush = mysqli_fetch_assoc($res_brush)): ?>
                    <tr>
                        <td> <?php echo $brush['id']; ?> </td>

                        <td><img class="imagen-tabla" src="/images/<?php echo $brush['nombre'];?>"></td>    

                        <td> <?php echo $brush['creado']; ?> </td>

                        <td>

                            <!--Eliminar la imagen-->
                            <form method="POST" class="w-100">
                                <input type="hidden" name="id" value="<?php echo $brush['id'];?> ">

                                <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>

                            <a class="boton-amarillo-block" href="/admin/tattoos/actualizar.php?id=<?php echo $brush['id']; ?>">Actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>

        </div>

    </div>
    
    <div class="admin">
        <h1>Artwork</h1>
    </div>
</main>

<?php
    incluirTemplate('footer');
?>