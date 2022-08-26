<?php 

if(isset($_GET)){
    if(isset($_GET['edad'])){
        $edad = $_GET['edad'];
    }else{
        $edad = 0;
    }
    if(isset($_GET['estudiante'])){
        $est = $_GET['estudiante'];    
    }else{
        $est = 'estudiante';
    }
    
    

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