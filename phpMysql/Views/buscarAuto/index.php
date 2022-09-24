<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Public/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Public/cssPuro/style.css">
    <title>Hola</title>
</head>

<body>
    <?php require_once '../templates/header.php'; ?>
    <div>
        <form action="../accion/accionBuscarAuto.php" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control w-50 m-2" id="patente" name="patente" placeholder="Patente">
                <label for="patente">Patente</label>
                <input type="hidden" name="accion" id="accion" value="buscarAutos">
                <input class="btn m-3 p-2 text-center" style="background-color: #EB5E0B; color:white;" type="submit" value="Buscar autos">
            </div>
        </form>
    </div>

    <?php require_once '../templates/footer.php'; ?>
</body>

</html>