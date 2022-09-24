<?php
require_once 'Controllers/errores.php';


// Mapeo para llevar al usuario a las distintas vistas.

class App{

    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        // Cuando se ingresa sin definir controlador
        if(empty($url[0])){
        $archivoController = 'Controllers/main.php';
        require_once $archivoController;
        $controller = new Main();
        $controller->loadModel('main');
        $controller->render();
        return false;
        }
        

        $archivoController = 'Controllers/'.$url[0].'.php';
        if(file_exists($archivoController)){
            require_once $archivoController;
            
            //Inicializar el controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            // si hay un metodo que se requiere cargar
            if(isset($url[1])){
                $controller->{$url[1]}();
            }else{
                $controller->render();
            }
        } else{
            $controller = new Warning();
        }

    } 
}
?>