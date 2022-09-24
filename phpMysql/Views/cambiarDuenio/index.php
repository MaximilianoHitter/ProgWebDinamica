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
    <div class='m-3' id="contenedorForm">
        <form action="../accion/accionCambioDuenio.php" method="post">
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="inputPatente" id="inputPatente">
                <label for="inputPatente">La patente</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="inputDni" id="inputDni">
                <label for="inputDni">El DNI del nuevo duenio</label>
            </div>
            <div class="form-floating mb-3">
                <input type="submit" value="Cambiar">
            </div>


        </form>
    </div>
    <?php require_once '../templates/footer.php' ?>
</body>

</html>