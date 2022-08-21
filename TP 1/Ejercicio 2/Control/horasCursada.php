<?php

$horas = [];

if(isset($_GET)){
    $lunes = $_GET['horasLunes_form'];
    $martes = $_GET['horasMartes_form'];
    $miercoles = $_GET['horasMiercoles_form'];
    $jueves = $_GET['horasJueves_form'];
    $viernes = $_GET['horasViernes_form'];
    array_push($horas, $lunes, $martes, $miercoles, $jueves, $viernes);
}else{
    echo 'No se ingresaron datos';
}

$horasTotales = 0;

foreach($horas as $key){
    $horasTotales += $key;
}

echo $horasTotales."<br>";
echo '<a href="../Vista/index.php">Volver</a>';

?>