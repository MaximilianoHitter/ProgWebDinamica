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
    <title>Buscar Persona</title>
</head>

<body>
    <?php require_once '../templates/header.php' ?>
    <div class="containerForm m-3 p-2" id="contenedorForm">
        <form action="../accion/accionBuscarPersona.php" method="post">
            <div class="form-floating mb-3">
                <input class="form-control" type="number" name="inputDni" id="inputDni">
                <label for="inputDni">DNI</label>
                <!-- <input type="hidden" name="accion" value="buscar"> -->
            </div>
            <div class="form-floating mb-3">
                <button type="submit" value="Buscar" id="boton" disabled>Buscar</button>
                <a class="btn m-3" style="background-color:#563d7c; color:white;" href="../personas/index.php">Volver</a>
            </div>

        </form>
    </div>
    <script src="../../Public/jsPuro/dnival.js"></script>
    <?php require_once '../templates/footer.php' ?>
</body>

</html>