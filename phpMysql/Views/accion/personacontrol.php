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
        $mensaje = 'La accion '.$datos['accion'].' fue hecha correctamente';
    }else{
        $mensaje = 'No se pudo realizar la accion '.$datos['accion'];
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
    <title>Document</title>
</head>
<body>
<?php require_once '../templates/header.php'?>

    <?php echo $mensaje;?>


    <?php require_once '../templates/footer.php'; ?>
</body>
</html>