<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
    <title>Subir Txt</title>
</head>

<body>
    <div class="contenedor-formulario">
        <h2>Archivo de texto</h2>
        <form class="needs-validation" action="../Control/validarTxt.php" method="post" name="formulario" id="formulario" enctype="multipart/form-data" novalidate>
            <div class="form_group">
                <label for="formFile" class="form-label">
                    Sube un archivo de texto.
                </label>
                <input class="form-control mb-3" type="file" id="formFile" name="formFile" required>
                <div class="error invalid-feedback">
                    Debe subir un archivo de texto(.txt).
                </div>
                <input id="btnEnviar" class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>
