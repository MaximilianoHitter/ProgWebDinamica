<?php

if($_POST){
    $name = $_POST['name'];
    $apellido = $_POST['apell'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direc'];
    echo "Hola, me llamo ".$name. " ". $apellido. "tengo ".$edad."años y vivo en ". $direccion;

}else{
    echo "ya fue";
}

echo "<button type=\"button\"><a href=\"..\\VISTA\\ejercicio3.php\"\>Volver</button>";
