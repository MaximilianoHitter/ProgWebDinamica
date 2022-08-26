<html>

    <head>
    <title>EJERCICIO 5</title>
    <link rel="icon" type="image/png" href="../../favicon.ico">
    </head>

    <body>
    <?php include('../../header.php'); ?>
       <form action="..\CONTROLADOR\ejecuta5.php" method="get">
        <label for="name">NOMBRE: </label> <input type="text" id="name" name="name"><br><br>
        <label for="apell">APELLIDO: </label><input type="text" id="apell" name="apell"><br><br>
        <label for="edad">EDAD :</label><input type="text" id="edad" name="edad"><br><br>
        <label for="direc">DIRECCION: </label><input type="text" id="direc" name="direc"><br><br>
        <h4>NIVEL DE ESTUDIOS</h4>
        <label for="no_estudios">no tiene estudios <input type="radio" id="estudio" name="estudio" value="no tiene estudios">
        <label for="primaria">tiene la primaria  <input type="radio" id="estudio" name="estudio" value="primaria">
        <label for="secundaria">tiene la secundaria <input type="radio" id="estudio" name="estudio" value="secundaria">
        <label for="universitaria">es universitario<input type="radio" id="estudio" name="estudio" value="universitaria">
        <BR>
        <h4>SEXO</h4>
        <label for="femenino">femenino<input type="radio" id="sexo" name="sexo" value="femenino">
        <label for="masculino">masculino<input type="radio" id="sexo" name="sexo" value="masculino">
        <br>
        <br>
        <input class="boton" type="submit" name="submit" value="enviar">
        
       </form>
       <button type="button"><a href="../../../index.html"> Volver al inicio</a></button>
       <?php include('../../footer.php'); ?>
    </body>

    

</html>