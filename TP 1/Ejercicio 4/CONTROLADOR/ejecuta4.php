<?php

if($_GET){
    $name = $_GET['name'];
    $apellido = $_GET['apell'];
    $edad = $_GET['edad'];
    $direccion = $_GET['direc'];
    if($edad > 18){
        echo " eres mayor de 18, podes hacer lo que quieras \n";
    }elseif ($edad < 12) {
        echo " eres menor de 12, vaya con sus papas "."\n";
        
    } else {
        echo " tienes estre 12 y 18 y eres un adolescente insoportable "."\n";
    }
    
    echo " Hola, me llamo ". $name . " ". $apellido . " tengo ". $edad ." años y vivo en ". $direccion . "\n";

}else{
    echo "no hay datos"."\n";
}

echo "<button type=\"button\"><a href=\"..\\VISTA\\ejercicio4.php\"\>Volver</button>";
