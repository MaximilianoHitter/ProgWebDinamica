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
    <form id="form2" name="form2" method="get" action="../Control/horasCursada.php">
        <h2>Programacion Web Dinamica</h2>
        <!-- <p>Cuantas dias cursas esta materia?: </p>
        <input type="number" id="diasCursada"><br>
        <input type="button" value="Ok" id="btnDias"><br> -->
        <h3>Horas de cursada por dia de Programacion Dinamica</h3>
        Lunes <input type="number" id="horasLunes_form" name="horasLunes_form"><br>
        Martes <input type="number" id="horasMartes_form" name="horasMartes_form"><br>
        Miercoles <input type="number" id="horasMiercoles_form" name="horasMiercoles_form"><br>
        Jueves <input type="number" id="horasJueves_form" name="horasJueves_form"><br>
        Viernes <input type="number" id="horasViernes_form" name="horasViernes_form"><br>
        <input type="submit" name="submit" value="Enviar" >
    </form>
    <button type="button"><a href="../../../index.html"> Volver al inicio</a></button>
    <?php include('../../footer.php'); ?>
    <!-- <script src="script.js"></script> -->
</body>
</html>
<?php



?>