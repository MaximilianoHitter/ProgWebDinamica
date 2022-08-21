<?php

if($_POST){
    $name = $_POST['name'];
    $apellido = $_POST['apell'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direc'];
    $sexo = $_POST['sexo'];
    $estudios = $_POST['estudio'];
    $cantidad = 0;
    //$deportes = ""; para escribir los deportes

    if(isset($_POST['futbol'])){
        //$deportes .= $_POST['futbol'];
        //$deportes .= " ";
        $cantidad++;
    }
    if(isset($_POST['tennis'])){
        //$deportes .= $_POST['tennis'];
        //$deportes .= " ";
        $cantidad++;
    }
    if(isset($_POST['voley'])){
        //$deportes .= $_POST['voley'];
        //$deportes .= " ";
        $cantidad++;
    }
    if(isset($_POST['basket'])){
        //$deportes .= $_POST['basket'];
        //$deportes .= " ";
        $cantidad++;
    }
    echo "Mi nombre es " . $name . " ". $apellido . " tengo " . $edad . "y vivo en " . $direccion . " sexo ".$sexo. " y tengo ". $estudios;
    //echo "<br>"."los deportes que practico son ". $deportes;
    echo "<br>"."la cantidad de deportes que hace es ". $cantidad;
    
    
}else{
    echo "me fui";
}
echo "<button type=\"button\"><a href=\"..\\VISTA\\ejercicio6.php\"\>Volver</button>";