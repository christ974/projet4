<?php

namespace App\Controllers;

abstract class Controller{

    protected function view(String $view, Array $args)
    {
        foreach($args as $key => $value) {
            $$key = $value;
        }
        ob_start(); 
        require '../Views/' . str_replace(".","/", $view)  . '.php';
        $content = ob_get_clean();  
        require '../Views/template.php';
    }
}
