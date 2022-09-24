<?php 

include_once '../../config.php';

$datos = data_submitted();
$resp = false;

$ctrlNewCar = new AutoControl();
$ctrlNewPeople = new PersonaControl();

if($ctrlNewPeople->buscarPorDni($datos['inputDniDuenio']) != null){
    if($ctrlNewCar->insertar($datos)){
        $resp = true;
    }
};

if($resp){
    $mensaje = "El auto se ingreso correctamente";
}else{
    $mensaje = 'Algo salio mal. La persona dueña del auto debe estar registrada.';
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
    <?php require_once '../templates/header.php' ?>
        <?php echo $mensaje ?>
    <?php require_once '../templates/footer.php' ?>
</body>
</html>