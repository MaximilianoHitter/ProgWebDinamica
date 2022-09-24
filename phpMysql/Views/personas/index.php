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
    <?php require_once '../templates/header.php'?>

    <div class="containerPersonas">
        <!-- <a id="btnViewPeople" class="btn" role="button" href="#">Informacion Dueños</a> -->
    <h3 class="text-center">Persona control</h3>
    <?php
        /* foreach($this->personas as $key){ ?>
            <strong>DNI:</strong> <?php echo $key->getNroDni() ?>;
            <strong>Apellidos:</strong> <?php echo $key->getApellido() ?>;
            <strong>Nombre:</strong> <?php echo $key->getNombre() ?>;
            <strong>Fecha nacimiento:</strong> <?php echo $key->getFechaNac() ?>;
            <strong>Telefono:</strong> <?php echo $key->getTelefono() ?>;
            <strong>Domicilio:</strong> <?php echo $key->getDomicilio() ?> <br><hr>
       <?php  }*/ ?>
    </div>
    <div class="containerForm m-3 p-2">
        <form action="../accion/personacontrol.php" method="POST">
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="inputDni" id="inputDni" placeholder="Numero de documento">
                <label for="inputDni">Numero de documento</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="inputApellido" id="inputApellido" placeholder="Apellido">
                <label for="inputApellido">Apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="inputNombre" id="inputNombre" placeholder="Nombre">
                <label for="inputNombre">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" name="inputFechaNac" id="inputFechaNac" placeholder="Fecha nacimiento">
                <label for="inputFechaNac">Fecha de nacimiento</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="inputTelefono" id="inputTelefono" placeholder="Numero de telefono">
                <label for="inputTelefono">Telefono</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="inputDomicilio" id="inputDomicilio" placeholder="Domicilio">
                <label for="inputDomicilio">Domicilio</label>
            </div>
            <div class="mb-3">
                <input type="hidden" name="accion" id="accion" value="nuevo">
                <input id="btnViewPeople" class="p-2" type="submit" value="Enviar">
            </div>
           
            
        </form>
    </div>

    <?php require_once '../templates/footer.php' ?>
</body>
</html>