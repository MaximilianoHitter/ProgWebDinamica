<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
    <title>Subir archivo</title>
</head>

<body>
    <div class="contenedor-formulario">
    <h2>Subir un archivo</h2>
    <form method="post" enctype="multipart/form-data" action="../Control/control.php" class="needs-validation" novalidate>
        <div class="form_group">
            <input class="form-control" name="archivo" id="archivo" type="file" required>
            <div class="error invalid-feedback">
                Debe subir un archivo PDF o .DOC
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

<?php
?>