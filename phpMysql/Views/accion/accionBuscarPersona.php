<?php

include_once '../../config.php';

$datos = data_submitted();
$resp = false;

$objCtrlPersona = new PersonaControl();

$mensaje = $objCtrlPersona->buscarPorDni($datos['inputDni']);

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
    if ($mensaje != null) { ?>
        <div class="containerForm m-3 p-2">
            <form action="../accion/ActualizarDatosPersona.php" method="post">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="inputDni" id="inputDni" value="<?php echo $mensaje[0]->getNroDni() ?>" readonly=»readonly»>
                    <label for="inputDni">DNI</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="inputApellido" id="inputApellido" value="<?php echo $mensaje[0]->getApellido() ?>">
                    <label for="inputApellido">Apellido</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="inputNombre" id="inputNombre" value="<?php echo $mensaje[0]->getNombre() ?>">
                    <label for="inputNombre">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="inputFechaNac" id="inputFechaNac" value="<?php echo $mensaje[0]->getFechaNac() ?>">
                    <label for="inputFechaNac">Fecha de nacimiento (dd/mm/aaaa)</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="inputTelefono" id="inputTelefono" value="<?php echo $mensaje[0]->getTelefono() ?>">
                    <label for="inputTelefono">Telefono</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="inputDomicilio" id="inputDomicilio" value="<?php echo $mensaje[0]->getDomicilio() ?>">
                    <label for="inputDomicilio">Domicilio</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="btn" style="background-color:#563d7c; color:white;" type="submit" value="Modificar">
                </div>

            </form>
        </div>
    <?php } else { ?>

        <h1 class="text-center mt-3">No se encontro a la persona buscada.</h1>

    <?php  }
    ?>

    <a href="../buscarPersona/index.php" class="btn ms-4" style="background-color:#563d7c; color:white;">Volver</a>
    <?php require_once '../templates/footer.php' ?>
</body>

</html>