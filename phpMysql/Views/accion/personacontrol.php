<?php

include_once '../../config.php';
//include_once '../../Controllers/PersonaControl.php';

$datos = data_submitted();
$resp = false;

$objTrans = new PersonaControl();

if(isset($datos['accion'])){
    if($datos['accion'] == 'nuevo'){
        if($objTrans->alta($datos)){
            $resp = true;
        }
    }
    if($datos['accion'] == 'borrar'){
        if($objTrans->baja($datos)){
            $resp = true;
        }
    }
    if($datos['accion'] == 'editar'){
        if($objTrans->modificacion($datos)){
            $resp = true;
        }
    }

    /* if($datos['accion'] == 'buscar'){
        if()
    } */

    if($resp){
        $mensaje = true;
    }else{
        $mensaje = false;
    }
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
<?php require_once '../templates/header.php'?>


    <?php 
        if($mensaje){ ?>
            <h1 class="text-center mt-3">Accion realizada con exito.</h1>
       <?php } else{ ?>
            <h1 class="text-center mt-3">No se pudo ingresar la persona porque el DNI ya se encuentra en la base de datos.</h1>
      <?php  }
    ?>


    <?php require_once '../templates/footer.php'; ?>
</body>
</html>