<?php
    require_once('../../config.php');
    $data = data_submitted();
    $objPersona = new PersonaControl();
    $objAuto = new AutoControl();

    $personasArray = $objPersona->buscar( $data );
    $autosData = $objAuto->buscarDueño( $data );
    
    $objPersonaEncontrada = null;
    if( isset($data['NroDni']) ){
        // Si se encuentra una persona en el arreglo entonces guardamos el objeto de la persona en una variable
        if( count($personasArray) == 1 ){
            $objPersonaEncontrada = $personasArray[0];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Personas</title>

    <!-- Bootstrap -->
    <script src="../../Public/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../Public/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body>

    <?php require_once '../templates/header.php'; ?>

    <div class="d-flex justify-content-center m-3">
        <div class="col-md-12">
            <h2 class="d-flex justify-content-center">DNI Consultado: </h2>
            <div class="mb-3">
                <table class="table table-striped">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha de nacimiento</th>
                        <th>Telefono</th>
                        <th>Domicilio</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><?php echo $objPersonaEncontrada->getNroDni(); ?></td>
                        <td><?php echo $objPersonaEncontrada->getNombre(); ?></td>
                        <td><?php echo $objPersonaEncontrada->getApellido(); ?></td>
                        <td><?php echo $objPersonaEncontrada->getFechaNac(); ?></td>
                        <td><?php echo $objPersonaEncontrada->getTelefono(); ?></td>
                        <td><?php echo $objPersonaEncontrada->getDomicilio(); ?></td>
                    </tr>
                </table>
            </div>
            <div class="mb-3">
                <h2 class="d-flex justify-content-center">Autos:</h2>
                <table class="table table-striped">
                    <?php
                        if( isset($autosData) ){
                            foreach( $autosData as $auto ){
                                echo '<tr>';
                                echo '<th>Patente</th>';
                                echo '<th>Marca</th>';
                                echo '<th>Modelo</th>';
                                echo '<th></th>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td>' .$auto->getPatente(). '</td>';
                                echo '<td>' .$auto->getMarca(). '</td>';
                                echo '<td>' .$auto->getModelo(). '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<p class="lead">La persona ingresada no posee ningún auto. Se salvó de pagar impuestos!</p>';
                        }
                    ?>
                </table>
            </div>
            <div class="mb-3">
                <a href="../personas/autosPersona.php"><button class="btn btn-warning">Volver</button></a>
            </div>
        </div>
    </div>

    <?php require_once '../templates/footer.php'; ?>

</body>
</html>