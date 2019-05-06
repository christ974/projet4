<?php

use App\Controllers\ControllerBackEnd;
use App\Controllers\ControllerFrontEnd;

$controllerFrontEnd = new ControllerFrontEnd();

/*CONTROLLER FRONTEND*/

/*ACCUEIL*/
$router->map('GET', '/',function () use ($controllerFrontEnd){
    $controllerFrontEnd->listArticles();
} );

/*CHAPITRE*/
$router->map('GET', '/article/[i:id]', function($id) use ($controllerFrontEnd){
    $controllerFrontEnd->article($id);
});
/**permet de poster un commentaire */
$router->map('POST', '/article/[i:id]', function($id) use ($controllerFrontEnd){
    $controllerFrontEnd->addComment($id); });

    /*AUTEUR*/
$router->map('GET', '/auteur', 'auteur', 'auteur');

$router->map('POST','/login',function() use($controllerFrontEnd){
    $controllerFrontEnd->login();
});

/*ANNEXES*/
$router->map( 'GET', '/mentions_legales', 'mentions_legales', 'mentions_legales');
$router->map( 'GET', '/politiqueDonneesPerso', 'politiqueDonneesPerso', 'politiqueDonneesPerso');

/*------ADMINISTRATION CHAPITRES & COMMENTAIRES-----*/
$router->map('GET','/administration','administration');

/*CONTROLLER BACKEND*/
$controllerBackEnd = new ControllerBackEnd();

/*ADMINISTRATION - EDIT*/
$router->map('GET','/edit',function() use ($controllerBackEnd){
    $controllerBackEnd->retourEdit();
});
$router->map('POST', '/edit', 'edit', 'edit');


/*----------ADMINISTRATION CHAPITRES------------*/
/*CREATION D UN CHAPITRE*/
$router->map('GET', '/creer', 'creer', 'creer');
/**permet de poster un article */
$router->map('POST', '/creer', function() use ($controllerBackEnd){
    $controllerBackEnd->addArticle();
});

/*LIRE ET MODIFIER UN CHAPITRE*/
$router->map('GET','/modifier', function() use ($controllerBackEnd){
    $controllerBackEnd->getArtis();
});
/** et modifier un chapitre */
$router->map('POST','/modifier/[i:id]', function($id) use ($controllerBackEnd){
    $controllerBackEnd->updateArticle($id);
});

/*SUPPRIMER UN CHAPITRE*/
$router->map('GET','/supprimer',function() use($controllerBackEnd){
    $controllerBackEnd->getArts();
} );
$router->map('POST','/supprimer/[i:id]',function($id) use($controllerBackEnd){
    $controllerBackEnd->deleteArticle($id);
});

/*----------ADMINISTRATION COMMENTAIRES------------*/
/*LISTE COMMENTAIRES SIGNALES*/
$router->map('GET','/commentaires', function() use ($controllerBackEnd){
    $controllerBackEnd->getCom();
});
/*SUPPRIMER COMMENTAIRE SIGNALER */
$router->map('POST','/',function() use($controllerBackEnd){
    $controllerBackEnd->supprimerCommentSignaler();
});


