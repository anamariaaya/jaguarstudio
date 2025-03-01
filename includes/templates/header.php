<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaguar Studio</title>

    <link rel = "stylesheet" type = "text/css" href = "build/css/app.css"/>
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="mobile-menu">
            <img src="/build/img/barras.svg" alt="ícono menú responsive">
        </div>    
        <nav class="menu-bar mostrar">
            <a href="/" class="<?php echo $inicio ? 'no-filter' : ''; ?>">Home</a>
            <a href="/tattoos.php" class="<?php echo $tattoos ? 'no-filter' : ''; ?>">Tattoos</a>
            <a href="/artwork.php" class="<?php echo $artwork ? 'no-filter' : ''; ?>">Artwork</a>
            <a href="/prensa.php" class="<?php echo $prensa ? 'no-filter' : ''; ?>">Press</a>
            <a href="/contacto.php" class="<?php echo $contacto ? 'no-filter' : ''; ?>">Contact</a>
        </nav>
        
        <?php
        echo $inicio ?
        '<div class="index-title">
            <h1 class="titulo">Jaguar</h1>
            <h1 class="titulo">Studio</h1>
        </div>' : ''
        ?>

        <?php
        echo $tattoos ?
        '<div class="section-title">
            <h1 class="titulo">tattoos</h1>
        </div>' : ''
        ?>

        <?php
        echo $artwork ?
        '<div class="section-title">
            <h1 class="titulo">Artwork</h1>
        </div>' : ''
        ?>

        <?php
        echo $prensa ?
        '<div class="section-title">
            <h1 class="titulo">Press</h1>
        </div>' : ''
        ?>

        <?php
        echo $contacto ?
        '<div class="section-title">
            <h1 class="titulo">Contact</h1>
        </div>' : ''
        ?>
    </header>