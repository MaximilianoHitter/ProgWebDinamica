<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Public/cssPuro/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
    <?php require_once '../templates/header.php'?>

    <div id="main">
        <h2 class="bienvenida text-center pt-3 mp-3">Bienvenidos Compañeros al Trabajo Práctico 4 – PHP / MySql / PDO!</h2>
    </div>
    <div id="resumen" class="cuadro">
        <div class="hijo">
            <h2><p class="grupo1 text-center pt-3 mp-3">Somos el Grupo 5 </p></h2><br>  
            <h2><p class="grupo text-center pt-3 mp-3">Rojo, Jerónimo</p></h2>
            <h2><p class="grupo text-center pt-3 mp-3">Parra Marin, Gonzalo</p></h2>
            <h2><p class="grupo text-center pt-3 mp-3">Hitter, Maximiliano</p></h2>
            <h2><p class="grupo text-center pt-3 mp-3">Klimisch, Marcia</p></h2>
            <br>
            <br>
                <p>Podrán realizar el ingreso, modificación y  eliminación de registros de autos y los datos de sus respectivos dueños. <br>
                Trabajamos con el <strong>patrón de diseño MVC con PHP</strong>, conectando todo esto a una base de datos. Asi que, por favor, levante un servidor para que esta base de datos funcione.
                </p>
        </div>
    </div>
    
</body>
<?php require_once '../templates/footer.php' ?>
</html>