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
    
    public function login(){
        if ($_REQUEST['pseudo'] ==="***" && $_REQUEST['motDePass'] === '***' || $_REQUEST['pseudo'] ==="***" && $_REQUEST['motDePass'] === '***' || $_REQUEST['pseudo'] ==="***" && $_REQUEST['motDePass'] === '***')
        {header('Location:/edit');
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['user'] = $_REQUEST['pseudo'];
            
        }else{
            header('Location:/login?erreur=password');
        }
    }
    public function logout(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
            $_SESSION = array();
            unset($_SESSION['user']);;
        }
        //isset($_SESSION['user']);
        header('Location:/');
    }
}
