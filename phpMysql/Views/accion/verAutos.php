<?php

include_once '../../config.php';

$datos = data_submitted();
$resp = false;

$autos = new AutoControl();

if (isset($datos['accion'])) {
    if ($datos['accion'] == 'verAutos') {
        if ($autos->obtenerInfo() != '') {
            $resp = true;
        }
    }
}

if ($resp = true) {
    $lista = '';
    $mensaje = $autos->obtenerInfo();
    /* foreach($mensaje as $key){
        $lista .= "Nombre: ".$key['duenio']->getNombre().", Apellido: ".$key['duenio']->getApellido()."<br>".
        "Patente: ".$key['auto']->getPatente()."<br>".
        "Marca: ".$key['auto']->getMarca()."<br>".
        "Modelo: ".$key['auto']->getModelo()."<br>".
        "DNI Dueño: ".$key['auto']->getDniDuenio()."<br>";
    } */
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

    <?php // echo $mensaje[0]['duenio']->getNombre(); 
    ?>
    <div class="row m-3">
        <?php
        if ($mensaje != null) {
            foreach ($mensaje as $key) { ?>
                <div class="col-sm-4">
                    <div id="card">
                        <div class="autos card-body border m-3">
                            <p><strong>Nombre: </strong><?php echo $key['duenio']->getNombre() ?></p>
                            <p><strong>Apellido: </strong><?php echo $key['duenio']->getApellido() ?></p>
                            <p><strong>Patente: </strong><?php echo $key['auto']->getPatente() ?></p>
                            <p><strong>Marca: </strong><?php echo $key['auto']->getMarca() ?></p>
                            <p><strong>Modelo: </strong><?php echo $key['auto']->getModelo() ?></p>
                            <p><strong>DNI Dueño: </strong><?php echo $key['auto']->getDniDuenio() ?></p>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        <?php
        } else{
            echo "No hay autos cargados";
        }
        ?>

    </div>

    <?php require_once '../templates/footer.php'; ?>
</body>

</html>