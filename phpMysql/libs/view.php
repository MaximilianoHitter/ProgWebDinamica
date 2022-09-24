<?php

class View{

    function __construct()
    {
        // echo '<p>Vista base</p>';
    }

    function render($name){
        require 'Views/'. $name. '.php';
    }
}

?>