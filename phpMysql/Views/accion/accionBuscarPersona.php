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
    <title>Document</title>
</head>

<body>
    <?php require_once '../templates/header.php' ?>

    <div class="containerForm m-3 p-2">
        <form action="../accion/ActualizarDatosPersona.php" method="post">
            <div class="form-floating mb-3">
                <label for="inputDni"></label>
                <input type="number" class="form-control" name="inputDni" id="inputDni" value="<?php echo $mensaje[0]->getNroDni() ?>" readonly=»readonly» >
            </div>
            <div class="form-floating mb-3">
                <label for="inputApellido"></label>
                <input type="text" class="form-control" name="inputApellido" id="inputApellido" value="<?php echo $mensaje[0]->getApellido() ?>">
            </div>
            <div class="form-floating mb-3">
                <label for="inputNombre"></label>
                <input type="text" class="form-control" name="inputNombre" id="inputNombre" value="<?php echo $mensaje[0]->getNombre() ?>">
            </div>
            <div class="form-floating mb-3">
                <label for="inputFechaNac"></label>
                <input type="date" class="form-control" name="inputFechaNac" id="inputFechaNac" value="<?php echo $mensaje[0]->getFechaNac() ?>">
            </div>
            <div class="form-floating mb-3">
                <label for="inputTelefono"></label>
                <input type="text" class="form-control" name="inputTelefono" id="inputTelefono" value="<?php echo $mensaje[0]->getTelefono() ?>">
            </div>
            <div class="form-floating mb-3">
                <label for="inputDomicilio"></label>
                <input type="text" class="form-control" name="inputDomicilio" id="inputDomicilio" value="<?php echo $mensaje[0]->getDomicilio() ?>">
            </div>

            <div class="form-floating mb-3">
                <input type="submit" value="Modificar">
            </div>

        </form>
    </div>

    <?php require_once '../templates/footer.php' ?>
</body>

</html>