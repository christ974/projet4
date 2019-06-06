<?php

namespace App\Controllers;

abstract class Controller{
    
     /**
     * permet de ne pas indiquer l'extension
     * @return void
     */
    protected function view(String $view, Array $args)
    {
        foreach($args as $key => $value) {
            $$key = $value;
        }
        ob_start(); 
        require 'Views/' . str_replace(".","/", $view)  . '.php';
        $content = ob_get_clean();  
        require 'Views/template.php';
    }
    
     /**
     * permet de se connecter à l'administration
     * @return void
     */
    public function login()
    {
        if ($_REQUEST['pseudo'] ==="jean" && $_REQUEST['motDePass'] === 'bonjour' || $_REQUEST['pseudo'] ==="christ" && $_REQUEST['motDePass'] === 'bonjour' || $_REQUEST['pseudo'] ==="david" && $_REQUEST['motDePass'] === 'bonjour')
        {   
            header('Location:/edit');
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['user'] = $_REQUEST['pseudo'];
            
        }else{
            header('Location:/login?erreur=password');
        }
    }
    
     /**
     * permet de se déconnecter de l'administration
     * @return void
     */
    public function logout()
    {
        session_start();
        unset($_SESSION['user']);;
        header('Location:/');
    }
}
