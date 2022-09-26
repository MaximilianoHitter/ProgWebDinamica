<?php
    require_once('../../config.php');
    $objPersona = new PersonaControl();
    $arrayPersonas = $objPersona->buscar( null );
    $objAuto = new AutoControl();
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
    <title>Listado Personas</title>
</head>

<body>
    <?php require_once '../templates/header.php'; ?>

    <h3><p class= "titulos text-center bienvenida">LISTADO DE TODOS LAS PERSONAS REGISTRADAS</p></h3>
    <div class="container-fluid">
        <div class="container col-md-12">
            <div class="mb-3">
                <table class="table table-hover">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DNI</th>
                        <th>Fecha de nacimiento</th>
                        <th>Teléfono</th>
                        <th>Domicilio</th>
                        <th></th>
                    </tr>
                    <?php
                        if( isset($arrayPersonas) ){
                            foreach( $arrayPersonas as $persona ){
                                echo '<tr>';
                                echo '<td>' .$persona->getNombre(). '</td>';
                                echo '<td>' .$persona->getApellido(). '</td>';
                                echo '<td>' .$persona->getNroDni(). '</td>';
                                echo '<td>' .$persona->getFechaNac(). '</td>';
                                echo '<td>' .$persona->getTelefono(). '</td>';
                                echo '<td>' .$persona->getDomicilio(). '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<p class="lead"> La búsqueda no arrojó resultados </p>';
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
    
    <div class="d-flex p-2 justify-content-center m-3">
        <div class="form-floating mb-3"> 
            <a class="btn m-3" style="background-color:#563d7c; color:white;" href="../personas/autosPersona.php">Buscar autos asociados</a>
            <a class="btn m-3" style="background-color:#563d7c; color:white;" href="../personas/index.php">Volver</a>
        </div>
    </div>
    
    
    <?php require_once '../templates/footer.php'; ?>
</body>

</html>