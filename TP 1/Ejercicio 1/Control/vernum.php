<?php

if( isset($_POST['submit']) ){
    $num = $_POST['num'];
    $resultado = '';
    if( $num > 0 ){
        $resultado = 'Positivo';
    } elseif( $num < 0 ){
        $resultado = 'Negativo';
    } else {
        $resultado = 'Cero';
    }
    echo $resultado;
    echo "<button><a href=\"../Vista/form.html\"> Volver </a></button>";
}