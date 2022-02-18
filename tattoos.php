<?php
    //Importar la conexión a BBDD
    require __DIR__ . '/includes/config/database.php';
    $db = conectarDB();

    $nombres = "SELECT * FROM categorias";
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


    $enlaces = mysqli_query($db, $nombres);

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

    require 'includes/funciones.php';
    incluirTemplate('header',$inicio = false, $tattoos = true);
?>

<main>
    <nav class="categorias">
        <?php while($nombre = mysqli_fetch_assoc($enlaces)):?>
            <a href="#<?php echo $nombre['nombre'] ?>"
            name="<?php echo $nombre['id'] ?>">
            <?php echo $nombre['nombre'] ?>
            </a>
        <?php endwhile; ?>
    </nav>
    
    <div class="cat-tattoo" id="animals">
        <h2>Animals</h2>
        <div class="grid-tattoo">
            <?php while($animals = mysqli_fetch_assoc($res_animals)):?>      
                <img src="/build/img/<?php echo $animals['nombre']?>.jpg" alt="<?php echo 'Tatuaje '.$animals['id'];?>">
            <?php endwhile; ?> 
        </div>
    </div>

    <div class="cat-tattoo" id="brush strokes">
        <h2>Brush Strokes</h2>
        <div class="grid-tattoo">
            <?php while($brush = mysqli_fetch_assoc($res_brush)):?>      
                <img src="/build/img/<?php echo $brush['nombre']?>.jpg" alt="<?php echo 'Tatuaje '.$brush['id'];?>">
            <?php endwhile; ?> 
        </div>
    </div>

    <div class="cat-tattoo" id="cartoon">
        <h2>cartoon</h2>
        <div class="grid-tattoo">
            <?php while($cartoon = mysqli_fetch_assoc($res_cartoon)):?>      
                <img src="/build/img/<?php echo $cartoon['nombre']?>.jpg" alt="<?php echo 'Tatuaje '.$cartoon['id'];?>">
            <?php endwhile; ?> 
        </div>
    </div>

    <div class="cat-tattoo" id="dark">
        <h2>dark</h2>
        <div class="grid-tattoo">
            <?php while($dark = mysqli_fetch_assoc($res_dark)):?>      
                <img src="/build/img/<?php echo $dark['nombre']?>.jpg" alt="<?php echo 'Tatuaje '.$dark['id'];?>">
            <?php endwhile; ?> 
        </div>
    </div>

    <div class="cat-tattoo" id="geometry">
        <h2>geometry</h2>
        <div class="grid-tattoo">
            <?php while($geometry = mysqli_fetch_assoc($res_geometry)):?>      
                <img src="/build/img/<?php echo $geometry['nombre']?>.jpg" alt="<?php echo 'Tatuaje '.$geometry['id'];?>">
            <?php endwhile; ?> 
        </div>
    </div>

    <div class="cat-tattoo" id="lettering">
        <h2>lettering</h2>
        <div class="grid-tattoo">
            <?php while($lettering = mysqli_fetch_assoc($res_lettering)):?>      
                <img src="/build/img/<?php echo $lettering['nombre']?>.jpg" alt="<?php echo 'Tatuaje '.$lettering['id'];?>">
            <?php endwhile; ?> 
        </div>
    </div>

    <div class="cat-tattoo" id="organic">
        <h2>organic</h2>
        <div class="grid-tattoo">
            <?php while($organic = mysqli_fetch_assoc($res_organic)):?>      
                <img src="/build/img/<?php echo $organic['nombre']?>.jpg" alt="<?php echo 'Tatuaje '.$organic['id'];?>">
            <?php endwhile; ?> 
        </div>
    </div>

    <div class="cat-tattoo" id="oriental">
        <h2>oriental</h2>
        <div class="grid-tattoo">
            <?php while($oriental = mysqli_fetch_assoc($res_oriental)):?>      
                <img src="/build/img/<?php echo $oriental['nombre']?>.jpg" alt="<?php echo 'Tatuaje '.$oriental['id'];?>">
            <?php endwhile; ?> 
        </div>
    </div>

    <div class="cat-tattoo" id="portrait">
        <h2>portrait</h2>
        <div class="grid-tattoo">
            <?php while($portrait = mysqli_fetch_assoc($res_portrait)):?>      
                <img src="/build/img/<?php echo $portrait['nombre']?>.jpg" alt="<?php echo 'Tatuaje '.$portrait['id'];?>">
            <?php endwhile; ?> 
        </div>
    </div>

    <div class="cat-tattoo" id="sketch">
        <h2>sketch</h2>
        <div class="grid-tattoo">
            <?php while($sketch = mysqli_fetch_assoc($res_sketch)):?>      
                <img src="/build/img/<?php echo $sketch['nombre']?>.jpg" alt="<?php echo 'Tatuaje '.$sketch['id'];?>">
            <?php endwhile; ?> 
        </div>
    </div>

</main>

<?php
    incluirTemplate('footer');
?>