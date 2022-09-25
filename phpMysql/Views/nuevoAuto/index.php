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
    <title>Nuevo Auto</title>
</head>

<body>
    <?php include_once '../templates/header.php' ?>
    <div class="containerForm m-3 p-2" id="contenedorForm">
        <form action="../accion/accionNuevoAuto.php" method="post">
            <div class="form-floating mb-3">
                <label for="inputPatente">Patente</label>
                <input class="form-control" type="text" name="inputPatente" id="inputPatente">
            </div>

            <div class="form-floating mb-3">
                <label for="inputMarca">Marca</label>
                <input class="form-control" type="text" name="inputMarca" id="inputMarca">
            </div>

            <div class="form-floating mb-3">
                <label for="inputModelo">Modelo</label>
                <input class="form-control" type="number" name="inputModelo" step="1" min=0 id="inputModelo">
            </div>

            <div class="form-floating mb-3">
                <label for="inputDniDuenio">DNI Dueño</label>
                <input class="form-control" type="text" name="inputDniDuenio" id="inputDniDuenio">
            </div>
            <div class="form-floating mb-3">
                <input class="btn" style="background-color: #563d7c; color:white;" type="submit" value="Agregar" id="botonSubmit" disabled>
                <a class="btn m-3" style="background-color:#563d7c; color:white;" href="../autos/index.php">Volver</a>
            </div>

        </form>
    </div>
   
    <script src="../../Public/jsPuro/nuevoAuto.js"></script>
    <?php require_once '../templates/footer.php' ?>
</body>

</html>