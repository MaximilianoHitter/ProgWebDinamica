<?php 

if($_GET){
    $edad = $_GET['edad'];
    $est = $_GET['estudiante'];

    //Si es estudiante o menor de 12 años el precio es de $160,
    if($edad < 12 && $est == "estudiante"){
        echo "el valor de su entrada es de $160";
    }elseif($edad >= 12 && $est == "estudiante"){
        echo "el valor de su entrada es de $180";
    }else{
        echo "el valor de su entrada es de $300";
    }
    echo "<button type=\"button\"><a href=\"..\\VISTA\\ejercicio8.php\"\>Volver</button>";
}