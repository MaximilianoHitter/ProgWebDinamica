<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Vista/style.css">
    <title>Validar</title>
</head>

<body>
    <?php

    $dir = '/xampp1.0/htdocs/TP3/Ejercicio2/archivos/';
    $name = $_FILES['formFile']['name'];

    if ($_FILES['formFile']['error'] <= 0) {
        /* echo "Nombre: ". $_FILES['formFile']['name'].'<br>';
    echo "Tipo: ". $_FILES['formFile']['type'].'<br>';
    echo "Tamanio: ". $_FILES['formFile']['size']."kb".'<br>';
    echo "Carpeta temporal: ". $_FILES['formFile']['tmp_name'].'<br>'; */
        //Intentamos copiar el archivo al servidor
        if ($_FILES['formFile']['type'] == 'text/plain') {
            if (!copy($_FILES['formFile']['tmp_name'], $dir . $_FILES['formFile']['name'])) {
                echo 'No se pudo cargar el archivo';
            } else {
                $contenido = file_get_contents('../archivos/' . $name);
                echo "<div class=\"textArea\">
            <textarea rows='9' cols='60'>
            $contenido
            </textarea>
            </div>";
            }
        }else{
            echo "<div class=\" m-5 alert alert-danger d-flex align-items-center\" role=\"alert\">
            <svg class=\"bi flex-shrink-0 me-2\" width=\"24\" height=\"24\" role=\"img\" aria-label=\"Danger:\"><use xlink:href=\"#exclamation-triangle-fill\"/></svg>
            <div>
              El archivo no es de tipo .TXT <br>
              <a href=\"../Vista/index.php\">Volver</a>
            </div>
          </div>";;
        }
    } else {
        echo "No se subio ningun archivo";
    }

    ?>
</body>

</html>