<?php
include_once '../../config.php';

$datos = data_submitted();
$resp = false;

$objAutControl = new AutoControl();

if ($objAutControl->obtenerPorPatente($datos['patente'])) {
    $auto = $objAutControl->obtenerPorPatente($datos['patente']);
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
    if ($resp) { ?>
        <div class="col">
            <div id="card">
                <div class="autos card-body border m-3">
                    <p><strong>Patente:</strong> <?php echo $auto[0]->getPatente() ?>, <br>
                        <strong>Marca:</strong> <?php echo $auto[0]->getMarca() ?>, <br>
                        <strong>Modelo:</strong> <?php echo $auto[0]->getModelo() ?>, <br>
                        <strong>DNI dueño:</strong> <?php echo $auto[0]->getDniDuenio() ?>
                    </p>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <h1 class="m-3 text-center">No ha sido encontrado el número de patente.</h1>
    <?php
    }
    ?>

    <a href="../buscarAuto/index.php" class="btn ms-4" style="background-color:#563d7c; color:white;">Volver</a>
    <?php require_once '../templates/footer.php' ?>
</body>

</html>