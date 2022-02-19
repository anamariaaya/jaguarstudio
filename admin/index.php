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


// $string = 'animals4';
// $prueba = substr($string, -1);
// $nuevo = intval($prueba);
// var_dump($nuevo); 

$resultado = $_GET['resultado'] ?? null;
//Eliminar imagen
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $valor = $_POST['id'];
    $texto = substr($valor, -1);
    $id = intval($texto);
    var_dump($valor);
    // $id = filter_var($id, FILTER_VALIDATE_INT);
    // var_dump($id);
    
    if ($valor = 'animals'.$id){
        $query = "SELECT nombre FROM animals WHERE id = ${id}";
        $res_animals = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($res_animals);

        //Eliminar la imagen
        $query = "DELETE FROM animals WHERE id = ${id}";
        $res_animals = mysqli_query($db, $query);

        if($res_animals){
            header('location: /admin?resultado=3');
        }

    }
    if ($valor = 'brush'.$id){
        $query = "SELECT nombre FROM brush WHERE id = ${id}";
        $res_brush = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($res_brush);

        //Eliminar la imagen
        $query = "DELETE FROM brush WHERE id = ${id}";
        $res_brush = mysqli_query($db, $query);

        if($res_brush){
            header('location: /admin?resultado=3');
        }
    }
    if ($valor = 'cartoon'.$id){
        $query = "SELECT nombre FROM cartoon WHERE id = ${id}";
        $res_cartoon = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($res_cartoon);

        //Eliminar la imagen
        $query = "DELETE FROM cartoon WHERE id = ${id}";
        $res_cartoon = mysqli_query($db, $query);

        if($res_cartoon){
            header('location: /admin?resultado=3');
        }
    }
    if ($valor = 'dark'.$id){
        $query = "SELECT nombre FROM dark WHERE id = ${id}";
        $res_dark = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($res_dark);

        //Eliminar la imagen
        $query = "DELETE FROM dark WHERE id = ${id}";
        $res_dark = mysqli_query($db, $query);

        if($res_dark){
            header('location: /admin?resultado=3');
        }
    }
    if ($valor = 'geometry'.$id){
        $query = "SELECT nombre FROM geometry WHERE id = ${id}";
        $res_geometry = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($res_geometry);

        //Eliminar la imagen
        $query = "DELETE FROM geometry WHERE id = ${id}";
        $res_geometry = mysqli_query($db, $query);

        if($res_geometry){
            header('location: /admin?resultado=3');
        }
    }
    if ($valor = 'lettering'.$id){
        $query = "SELECT nombre FROM lettering WHERE id = ${id}";
        $res_lettering = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($res_lettering);

        //Eliminar la imagen
        $query = "DELETE FROM lettering WHERE id = ${id}";
        $res_lettering = mysqli_query($db, $query);

        if($res_lettering){
            header('location: /admin?resultado=3');
        }
    }
    if ($valor = 'organic'.$id){
        $query = "SELECT nombre FROM organic WHERE id = ${id}";
        $res_organic = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($res_organic);

        //Eliminar la imagen
        $query = "DELETE FROM organic WHERE id = ${id}";
        $res_organic = mysqli_query($db, $query);

        if($res_organic){
            header('location: /admin?resultado=3');
        }
    }
    if ($valor = 'oriental'.$id){
        $query = "SELECT nombre FROM oriental WHERE id = ${id}";
        $res_oriental = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($res_oriental);

        //Eliminar la imagen
        $query = "DELETE FROM oriental WHERE id = ${id}";
        $res_oriental = mysqli_query($db, $query);

        if($res_oriental){
            header('location: /admin?resultado=3');
        }
    }
    if ($valor = 'portrait'.$id){
        $query = "SELECT nombre FROM portrait WHERE id = ${id}";
        $res_portrait = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($res_portrait);

        //Eliminar la imagen
        $query = "DELETE FROM portrait WHERE id = ${id}";
        $res_portrait = mysqli_query($db, $query);

        if($res_portrait){
            header('location: /admin?resultado=3');
        }
    }

    if ($valor = 'sketch'.$id){
        $query = "SELECT nombre FROM sketch WHERE id = ${id}";
        $res_sketch = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($res_sketch);

        //Eliminar la imagen
        $query = "DELETE FROM sketch WHERE id = ${id}";
        $res_sketch = mysqli_query($db, $query);

        if($res_sketch){
            header('location: /admin?resultado=3');
        }
    }

}


    incluirTemplate('adminheader');
?>

<main class="container">
    <!-- Agregamos un mensaje de éxito al crear la imagen del tattoo -->
        <?php if (intval($resultado)===1):?>
            <script> alert('Imagen cargada')</script>

            <?php elseif(intval($resultado)===2):?>
                <script> alert('Imagen actualizada')</script>

            <?php elseif(intval($resultado)===3):?>
                <script> alert('Imagen eliminada')</script>
        <?php endif; ?>

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
                                <input type="hidden" name="id" value="<?php echo 'animals'.$animals['id'];?>">

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
                                <input type="hidden" name="id" value="<?php echo 'brush'.$brush['id'];?>">

                                <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>

                            <a class="boton-amarillo-block" href="/admin/tattoos/actualizar.php?id=<?php echo $brush['id']; ?>">Actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>

        </div>

        <!--cartoon-->
        <div class="admin-table">
            <h2>cartoon</h2>
            <a href="/admin/tattoos/crear.php" class="boton-verde">Nueva Imagen</a>
            <table class="admin-info">
                <thead>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </thead>

                <tbody> <!--Mostrar los resultados-->
                <?php while($cartoon = mysqli_fetch_assoc($res_cartoon)): ?>
                    <tr>
                        <td> <?php echo $cartoon['id']; ?> </td>

                        <td><img class="imagen-tabla" src="/images/<?php echo $cartoon['nombre'];?>"></td>    

                        <td> <?php echo $cartoon['creado']; ?> </td>

                        <td>

                            <!--Eliminar la imagen-->
                            <form method="POST" class="w-100">
                                <input type="hidden" name="id" value="<?php echo 'cartoon'.$cartoon['id'];?>">

                                <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>

                            <a class="boton-amarillo-block" href="/admin/tattoos/actualizar.php?id=<?php echo $cartoon['id']; ?>">Actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>

        </div>

        <!--dark-->
        <div class="admin-table">
            <h2>dark</h2>
            <a href="/admin/tattoos/crear.php" class="boton-verde">Nueva Imagen</a>
            <table class="admin-info">
                <thead>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </thead>

                <tbody> <!--Mostrar los resultados-->
                <?php while($dark = mysqli_fetch_assoc($res_dark)): ?>
                    <tr>
                        <td> <?php echo $dark['id']; ?> </td>

                        <td><img class="imagen-tabla" src="/images/<?php echo $dark['nombre'];?>"></td>    

                        <td> <?php echo $dark['creado']; ?> </td>

                        <td>

                            <!--Eliminar la imagen-->
                            <form method="POST" class="w-100">
                                <input type="hidden" name="id" value="<?php echo 'dark'.$dark['id'];?>">

                                <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>

                            <a class="boton-amarillo-block" href="/admin/tattoos/actualizar.php?id=<?php echo $dark['id']; ?>">Actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>

        </div>

        <!--geometry-->
        <div class="admin-table">
            <h2>geometry</h2>
            <a href="/admin/tattoos/crear.php" class="boton-verde">Nueva Imagen</a>
            <table class="admin-info">
                <thead>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </thead>

                <tbody> <!--Mostrar los resultados-->
                <?php while($geometry = mysqli_fetch_assoc($res_geometry)): ?>
                    <tr>
                        <td> <?php echo $geometry['id']; ?> </td>

                        <td><img class="imagen-tabla" src="/images/<?php echo $geometry['nombre'];?>"></td>    

                        <td> <?php echo $geometry['creado']; ?> </td>

                        <td>

                            <!--Eliminar la imagen-->
                            <form method="POST" class="w-100">
                                <input type="hidden" name="id" value="<?php echo 'geometry'.$geometry['id'];?>">

                                <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>

                            <a class="boton-amarillo-block" href="/admin/tattoos/actualizar.php?id=<?php echo $geometry['id']; ?>">Actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>

        </div>

        <!--lettering-->
        <div class="admin-table">
            <h2>lettering</h2>
            <a href="/admin/tattoos/crear.php" class="boton-verde">Nueva Imagen</a>
            <table class="admin-info">
                <thead>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </thead>

                <tbody> <!--Mostrar los resultados-->
                <?php while($lettering = mysqli_fetch_assoc($res_lettering)): ?>
                    <tr>
                        <td> <?php echo $lettering['id']; ?> </td>

                        <td><img class="imagen-tabla" src="/images/<?php echo $lettering['nombre'];?>"></td>    

                        <td> <?php echo $lettering['creado']; ?> </td>

                        <td>

                            <!--Eliminar la imagen-->
                            <form method="POST" class="w-100">
                                <input type="hidden" name="id" value="<?php echo 'lettering'.$lettering['id'];?>">

                                <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>

                            <a class="boton-amarillo-block" href="/admin/tattoos/actualizar.php?id=<?php echo $lettering['id']; ?>">Actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>

        </div>

        <!--organic-->
        <div class="admin-table">
            <h2>organic</h2>
            <a href="/admin/tattoos/crear.php" class="boton-verde">Nueva Imagen</a>
            <table class="admin-info">
                <thead>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </thead>

                <tbody> <!--Mostrar los resultados-->
                <?php while($organic = mysqli_fetch_assoc($res_organic)): ?>
                    <tr>
                        <td> <?php echo $organic['id']; ?> </td>

                        <td><img class="imagen-tabla" src="/images/<?php echo $organic['nombre'];?>"></td>    

                        <td> <?php echo $organic['creado']; ?> </td>

                        <td>

                            <!--Eliminar la imagen-->
                            <form method="POST" class="w-100">
                                <input type="hidden" name="id" value="<?php echo 'organic'.$organic['id'];?>">

                                <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>

                            <a class="boton-amarillo-block" href="/admin/tattoos/actualizar.php?id=<?php echo $organic['id']; ?>">Actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>

        </div>

        <!--oriental-->
        <div class="admin-table">
            <h2>oriental</h2>
            <a href="/admin/tattoos/crear.php" class="boton-verde">Nueva Imagen</a>
            <table class="admin-info">
                <thead>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </thead>

                <tbody> <!--Mostrar los resultados-->
                <?php while($oriental = mysqli_fetch_assoc($res_oriental)): ?>
                    <tr>
                        <td> <?php echo $oriental['id']; ?> </td>

                        <td><img class="imagen-tabla" src="/images/<?php echo $oriental['nombre'];?>"></td>    

                        <td> <?php echo $oriental['creado']; ?> </td>

                        <td>

                            <!--Eliminar la imagen-->
                            <form method="POST" class="w-100">
                                <input type="hidden" name="id" value="<?php echo 'oriental'.$oriental['id'];?>">

                                <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>

                            <a class="boton-amarillo-block" href="/admin/tattoos/actualizar.php?id=<?php echo $oriental['id']; ?>">Actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>

        </div>

        <!--portrait-->
        <div class="admin-table">
            <h2>portrait</h2>
            <a href="/admin/tattoos/crear.php" class="boton-verde">Nueva Imagen</a>
            <table class="admin-info">
                <thead>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </thead>

                <tbody> <!--Mostrar los resultados-->
                <?php while($portrait = mysqli_fetch_assoc($res_portrait)): ?>
                    <tr>
                        <td> <?php echo $portrait['id']; ?> </td>

                        <td><img class="imagen-tabla" src="/images/<?php echo $portrait['nombre'];?>"></td>    

                        <td> <?php echo $portrait['creado']; ?> </td>

                        <td>

                            <!--Eliminar la imagen-->
                            <form method="POST" class="w-100">
                                <input type="hidden" name="id" value="<?php echo 'portrait'.$portrait['id'];?>">

                                <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>

                            <a class="boton-amarillo-block" href="/admin/tattoos/actualizar.php?id=<?php echo $portrait['id']; ?>">Actualizar</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>

        </div>

        <!--sketch-->
        <div class="admin-table">
            <h2>sketch</h2>
            <a href="/admin/tattoos/crear.php" class="boton-verde">Nueva Imagen</a>
            <table class="admin-info">
                <thead>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </thead>

                <tbody> <!--Mostrar los resultados-->
                <?php while($sketch = mysqli_fetch_assoc($res_sketch)): ?>
                    <tr>
                        <td> <?php echo $sketch['id']; ?> </td>

                        <td><img class="imagen-tabla" src="/images/<?php echo $sketch['nombre'];?>"></td>    

                        <td> <?php echo $sketch['creado']; ?> </td>

                        <td>

                            <!--Eliminar la imagen-->
                            <form method="POST" class="w-100">
                                <input type="hidden" name="id" value="<?php echo 'sketch'.$sketch['id'];?>">

                                <input type="submit" class="boton-rojo-block" value="Eliminar">
                            </form>

                            <a class="boton-amarillo-block" href="/admin/tattoos/actualizar.php?id=<?php echo $sketch['id']; ?>">Actualizar</a>
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
    //Cerrar la conexión
    mysqli_close($db);
    
    incluirTemplate('footer');
?>