<?php

class Warning extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = 'Hubo un error en la solicitud o no se encontro la pagina';
        $this->view->render('errores/index');
    }
}

?>