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

    Ejercicio 3 – Crear una página "listaPersonas.php" que muestre un listado con las personas que se
encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
generada, no se puede acceder directamente a las clases del ORM.

    <h3><p class= "titulos text-center bienvenida">INGRESE EL DNI DE LA PERSONA A CONSULTAR</p></h3>
    
    <div>
        <form action="../accion/accionBuscarAuto.php" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control w-50 m-2" id="patente" name="patente" placeholder="Patente">
                <label for="patente">DNI a buscar</label>
                <input type="hidden" name="accion" id="accion" value="buscarAutos">
                <input class="btn m-3 p-2 text-center" id="botonSubmit" style="background-color: #563d7c; color:white;" type="submit" value="Buscar auto" disabled>
                <a class="btn m-3" style="background-color:#563d7c; color:white;" href="../autos/index.php">Volver</a>
            </div>
        </form>
    </div>
    <hr>
    <a class="btn m-3" style="background-color:#563d7c; color:white;" href="../personas/autosPersona.php">Buscar autos asociados</a>
    <a class="btn m-3" style="background-color:#563d7c; color:white;" href="../personas/index.php">Volver</a>
    <?php require_once '../templates/footer.php'; ?>
</body>

</html>