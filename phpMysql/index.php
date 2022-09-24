<?php
// El orden de los require debe ser siempre el mismo

require_once './libs/controller.php';
require_once './libs/view.php';
require_once './libs/app.php';
require_once './libs/funciones.php';
require_once './Models/baseDatos/db.php';

require_once 'config.php';

//$app = new App();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
    <?php require_once './Views/templates/header.php'?>

    <div id="main">
        <h2 class="text-center pt-3 mp-3">Bienvenidos Compañeros!</h2>
    </div>
    <div id="resumen">
        <p class="ps-2">Grupo 5 - Rojo , Parra Marín, Hitter y Klimisch</p>
        <p class="ps-2">Trabajo Práctico No 4 – PHP / MySql / PDO</p>
        <p>Podrán realizar el ingreso, modificacion y  eliminación de registros de autos y los datos de sus respectivos dueños. <br>
        Trabajamos con el <strong>patron de diseño MVC con PHP</strong>, conectando todo esto a una base de datos. Asi que por favor levante un servidor para que esta base de datos funcione.
        </p>
    </div>
    <?php require_once './Views/templates/footer.php' ?>
</body>
</html>