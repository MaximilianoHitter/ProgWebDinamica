<?php

include_once '../../config.php';

$datos = data_submitted();
//print_r($datos);
//die(); info guardada correctam
$resp = false;

//$objCtrlPersona = new PersonaControl(); //probamos de deshabilitarla pa ver si funciona...ademas 
$objCtrlAuto = new AutoControl();
//print_r($objCtrlAuto);
//die();

if($objCtrlAuto->cambiarDuenio($datos)){
    $resp = true;
};
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
    if($resp){ ?>
        <div class="alert alert-success m-3" role="alert">
            Dueño modificado!
        </div>
        
   <?php }else{ ?>
            <div class="alert alert-danger m-3" role="alert">
                 No se pudo cambiar! Verifique que la patente o el DNI del nuevo dueño exista en el registro.
            </div>
       
   <?php }
    ?>

    <?php require_once '../templates/footer.php' ?>
</body>

</html>