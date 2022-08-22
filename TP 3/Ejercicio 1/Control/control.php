<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/style.css">
    <link rel="stylesheet" href="../Vista/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <script src="../Vista/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php

$dir = '/xampp1.0/htdocs/TP3/Ejercicio1/archivos/';
$direccion = $_SERVER['SERVER_NAME'];

if($_FILES['archivo']['error'] <= 0){
   /*  echo "Nombre: ". $_FILES['archivo']['name'].'<br>';
    echo "Tipo: ". $_FILES['archivo']['type'].'<br>';
    echo "Tamaño: ". $_FILES['archivo']['size']."kb".'<br>';
    echo "Carpeta temporal: ". $_FILES['archivo']['tmp_name'].'<br>'; */
    //Intentamos copiar el archivo al servidor
    if(($_FILES['archivo']['type'] == 'application/pdf' || $_FILES['archivo']['type'] == 'application/msword') && $_FILES['archivo']['size'] < 2000000){
        if(!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])){
            echo "Error: no se pudo cargar el archivo";
        }else{
            echo "<div class=\"success alert alert-success\" role=\"alert\">
            El archivo ".$_FILES['archivo']['name']." se ha copiado con exito. <br>
            Link al archivo: <a href='/TP3/Ejercicio1/archivos/".$_FILES['archivo']['name']."'> Aqui </a>
            </div>";
            /* echo "El archivo ".$_FILES['archivo']['name']." se ha copiado con exito <br>\";
            echo ""; */
        }
    } else{
        echo "<div class=\" m-5 alert alert-danger d-flex align-items-center\" role=\"alert\">
        <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Danger:\"><use xlink:href=\"#exclamation-triangle-fill\"/></svg>
        <div>
          El archivo no es de tipo PDF o .DOC <br>
          <a href=\"../Vista/index.php\">Volver</a>
        </div>
      </div>
      
      ";
    }
    
} else{
    echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo temporal";
}

?>
</body>
</html>
