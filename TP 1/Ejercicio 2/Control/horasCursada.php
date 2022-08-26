<?php

$horas = [];

if(isset($_GET)){
    if(isset($_GET['horasLunes_form'])){
        $lunes = intval($_GET['horasLunes_form']);
    }else{
        $lunes = 0;
    }
    if(isset($_GET['horasMartes_form'])){
        $martes = intval($_GET['horasMartes_form']);
    }else{
        $martes = 0;
    }
    if(isset($_GET['horasMiercoles_form'])){
        $miercoles = intval($_GET['horasMiercoles_form']);
    }else{
        $miercoles = 0;
    }
    if(isset($_GET['horasJueves_form'])){
        $jueves = intval($_GET['horasJueves_form']);
    }else{
        $jueves = 0;
    }
    if(isset($_GET['horasViernes_form'])){
        $viernes = intval($_GET['horasViernes_form']);
    }else{
        $viernes = 0;
    }
       
    array_push($horas, $lunes, $martes, $miercoles, $jueves, $viernes);
}else{
    echo 'No se ingresaron datos';
}

$horasTotales = 0;

foreach ($horas as $key => $value) {
    $horasTotales += $value;
}


echo $horasTotales."<br>";
echo '<a href="../Vista/index.php">Volver</a>';

?>