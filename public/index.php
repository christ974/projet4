<?php

require '../vendor/autoload.php';

$router = new AltoRouter();
require_once '../app/routes.php';


$match = $router->match();

if(is_array($match)){ //si on trouve un résultat, alors

    if (is_callable($match['target'])){//vérif si collable ou non, si oui
        call_user_func_array($match['target'],$match['params']);//on récupère la closure ds target et on l'appelleappelle la f°(closure)et un tableau contenant les params à envoyer à ntre f° ATTENTION les paramètres dvt TOUJOURS ds le ^m ordre que celui de l'url 
    }else{//si pas collable alors
        $params = $match['params'];//on définit la var params qui le sera aussi ds le fichier require
       require  "../Views/{$match['target']}.php";
    }


}

