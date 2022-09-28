<?php
    require_once('../../config.php');
    $data = data_submitted();
    $objAuto = new AutoControl();
    if( count($data) > 0 ){
        $objAuto->insertar( $data );
        $enviado = $data;
    } else {
        $enviado = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Auto</title>

    <!-- Bootstrap -->
    <script src="../../Public/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../Public/bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="d-flex justify-content-center m-3">
        <div class="container col-md-12">
            <h2>Agregar un auto</h2>
            <div class="mb-3">
                <?php
                if( $enviado !== null ){
                ?>
                <table class="table table-striped">
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Patente</th>
                        <th>DNI Dueño</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><?php echo $enviado['inputMarca']; ?></td>
                        <td><?php echo $enviado['inputModelo']; ?></td>
                        <td><?php echo $enviado['inputPatente']; ?></td>
                        <td><?php echo $enviado['inputDniDuenio']; ?></td>
                    </tr>
                </table>
                <?php
                } else {
                    echo '<p class="lead">El auto no se ha podido agregar</p>';
                }
                ?>
                
            </div>
            <div class="mb-3">
                <a href="../nuevoAuto/index.php"><button class="btn btn-warning">Volver</button></a>
            </div>
        </div>
    </div>
</body>
</html>