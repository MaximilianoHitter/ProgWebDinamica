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
    <?php require_once '../templates/header.php'; ?>

    <form action="../accion/verAutos.php" method="POST">
        <input type="hidden" name="accion" id="accion" value="verAutos">
        <input class="btn m-3 p-2 text-center" style="background-color: #EB5E0B; color:white;" type="submit" value="Ver Autos">
    </form>
    <hr>

    <a class="btn m-3" href="../buscarAuto/index.php" style="background-color: #EB5E0B; color:white;">Buscar autos</a>
    <!-- <form action="../accion/accionBuscarAuto.php" method="POST">
        <div class="form-floating mb-3">
            <input type="text" class="form-control w-50 m-2" id="patente" name="patente" placeholder="Patente">
            <label for="patente">Patente</label>
            <input type="hidden" name="accion" id="accion" value="buscarAutos">
            <input class="btn m-3 p-2 text-center" style="background-color: #EB5E0B; color:white;" type="submit" value="Buscar autos">
        </div>
    </form> -->
    <hr>

    <div>
        <a class="btn" style="background-color: #EB5E0B; color:white;" href="../nuevoAuto/index.php">Cargar nuevo auto</a>
        <hr>
    </div>
    <div>
        <a class="btn m-3" style="background-color: #EB5E0B; color:white;" href="../buscarPersona/index.php">Buscar Personas</a>
    </div>
    <hr>

    <div>
        <a class="btn m-3" style="background-color: #EB5E0B; color:white;" href="../cambiarDuenio/index.php">Cambiar duenio</a>
    </div>

    <?php require_once '../templates/footer.php'; ?>
</body>

</html>