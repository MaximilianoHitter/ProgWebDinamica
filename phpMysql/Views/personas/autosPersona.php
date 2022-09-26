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
    <title>Listado Personas</title>
</head>

<body>
    <?php require_once '../templates/header.php'; ?>

    <h3><p class= "titulos text-center bienvenida">INGRESE EL DNI DE LA PERSONA A CONSULTAR</p></h3>
    
    <div>
        <form action="../accion/accionAutosPersona.php" method="POST">
            <div class="form-floating d-flex p-2 justify-content-center m-3">
                <input type="number" class="form-control " id="NroDni" name="NroDni" placeholder="patente">
                <label for="patente">DNI a buscar</label>
                <input class="btn m-3" style="background-color: #563d7c; color:white;" type="submit" value="Buscar autos asociados" id="boton" disabled>
                <a class="btn m-3" style="background-color:#563d7c; color:white;" href="../personas/listaPersonas.php">Volver</a>
                
            </div>
        </form>
    </div>
    
    
    <?php require_once '../templates/footer.php'; ?>
    <script src="../../Public/jsPuro/buscarDni.js"></script>
</body>

</html>