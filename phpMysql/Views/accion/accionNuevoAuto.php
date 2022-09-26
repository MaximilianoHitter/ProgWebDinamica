<?php 

include_once '../../config.php';

$datos = data_submitted();
//print_r ($datos);
//die();
$resp = false;

$ctrlNewCar = new AutoControl();
$ctrlNewPeople = new PersonaControl();

//PARA QUE SE PUEDA CREAR UN AUTO, TIENE QUE EXISTIR EN LA BASE DE DATOS EL DNI DEL DUEÑO

if($ctrlNewPeople->buscarPorDni($datos['inputDniDuenio']) != null){
    if($ctrlNewCar->insertar($datos)){
        $resp = true;
    }
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
    <?php require_once '../templates/header.php';
    if($resp){ ?>
        <div class="alert alert-success m-3" role="alert">
            El alta del auto se registró correctamente!
        </div>
    <?php }else{?>
            <div class="alert alert-danger m-3" role="alert">
                Algo salió mal. La persona dueña del auto debe estar registrada antes de registrar el auto o la patente de este ya se encuentra registrada.
            </div>
    
            <?php }?>

        <a class="btn m-3" style="background-color:#563d7c; color:white;" href="../nuevoAuto/index.php">Volver</a>
<?php require_once '../templates/footer.php' ?>
</body>
</html>