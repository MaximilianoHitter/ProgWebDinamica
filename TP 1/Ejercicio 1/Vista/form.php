<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../../favicon.ico">
    <title>Document</title>
</head>

<body>
    <?php include('../../header.php'); ?>
    <form action="../Control/vernum.php" method="post">
        <label for="numero">Ingrese su número: </label>
        <br>
        <input type="number" name="num" id="num">
        <input type="submit" value="Enviar" name="submit" id="submit">
    </form>

    <button type="button"><a href="../../../index.html"> Volver al inicio</a></button>
    <?php include('../../footer.php'); ?>
</body>

</html>