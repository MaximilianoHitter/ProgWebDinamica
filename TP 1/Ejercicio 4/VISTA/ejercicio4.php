<html>

    <head>
    <title>EJERCICIO 4</title>
    <link rel="icon" type="image/png" href="../../favicon.ico">
    </head>

    <body>
    <?php include('../../header.php'); ?>
       <form action="..\CONTROLADOR\ejecuta4.php" method="get">
        <label for="name">NOMBRE: </label> <input type="text" id="name" name="name"><br><br>
        <label for="apell">APELLIDO: </label><input type="text" id="apell" name="apell"><br><br>
        <label for="edad">EDAD :</label><input type="text" id="edad" name="edad"><br><br>
        <label for="direc">DIRECCION: </label><input type="text" id="direc" name="direc">
        <br>
        <br>
        <input class="boton" type="submit" name="submit" value="enviar">
        
       </form>
       <button type="button"><a href="../../../index.html"> Volver al inicio</a></button>
       <?php include('../../footer.php'); ?>
    </body>



</html>


