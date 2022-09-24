<?php

include_once '../../config.php';

$datos = data_submitted();
//print_r($datos); //trae los datos correctamente
//die();
$resp = false;

$objCtrlPersona = new PersonaControl();

if($objCtrlPersona->modificacion($datos)){
    $resp = true;
}

?>
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
    <title>Document</title>
</head>
<body>
    <?php require_once '../templates/header.php' ?>
    <?php
     if($resp){

        echo "<div class='alert alert-success' role='alert'>
        Modificación realizada con éxito
        </div>";
        //echo 'Modificacion realizada con exito';
    } else{
        
        echo "<div class='alert alert-danger' role='alert'>
        No se pudo realizar la acción. Debe realizar algún cambio en el registro
        </div>";
    }
    ?>

    <?php require_once '../templates/footer.php' ?> 
</body>
</html>