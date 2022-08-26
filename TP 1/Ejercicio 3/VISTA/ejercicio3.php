<html>

    <head>
    <title>EJERCICIO 3</title>
        <link rel="stylesheet" href="..\TP1-PDW\VISTA\CSS\ejercicio1.css">
        <link rel="icon" type="image/png" href="../../favicon.ico">
    </head>

    <body>
    <?php include('../../header.php'); ?>
       <form action="..\CONTROLADOR\ejecuto3.php" method="post">
        <label for="name">NOMBRE: </label> <input type="text" id="name" name="name"><br>
        <label for="apell">APELLIDO: </label><input type="text" id="apell" name="apell"><br>
        <label for="edad">EDAD :</label><input type="text" id="edad" name="edad"><br>
        <label for="direc">DIRECCION: </label><input type="text" id="direc" name="direc">
        <br>
        <br>
        <input class="boton" type="submit" name="submit" value="enviar">
        
       </form>
       <button type="button"><a href="../../../index.html"> Volver al inicio</a></button>
       <?php include('../../footer.php'); ?>
    </body>



</html>
