<?php

if($_GET){
    $name = $_GET['name'];
    $apellido = $_GET['apell'];
    $edad = $_GET['edad'];
    $direccion = $_GET['direc'];
    $sexo = $_GET['sexo'];
    $estudios = $_GET['estudio'];
    echo "Mi nombre es " . $name . $apellido . " tengo " . $edad . "y vivo en " . $direccion . " sexo ".$sexo. " y tengo ". $estudios;
    
}
echo "<button type=\"button\"><a href=\"..\\VISTA\\ejercicio5.php\"\>Volver</button>";

