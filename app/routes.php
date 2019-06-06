<?php

use App\Controllers\ControllerBackEnd;
use App\Controllers\ControllerFrontEnd;

$controllerFrontEnd = new ControllerFrontEnd();

/*CONTROLLER FRONTEND*/

/*ACCUEIL & liste des chapitres avec lien lecture + commentaires*/
$router->map('GET', '/',function () use ($controllerFrontEnd){
    $controllerFrontEnd->listArticles();
} );

/*CHAPITRE permet la lecture d'un chapitre choisi + commentaires*/
$router->map('GET', '/article/[i:id]', function($id) use ($controllerFrontEnd){
    $controllerFrontEnd->article($id);
});

/**permet de poster un commentaire */
$router->map('POST', '/article/[i:id]', function($id) use ($controllerFrontEnd){
    $controllerFrontEnd->addComment($id); 
});

/**permet de signaler un commentaire */
 $router->map('POST','/comments/signaler/[i:id]',function($id) use($controllerFrontEnd){
    $controllerFrontEnd->reportComment($id);
});

/*AUTEUR*/
$router->map('GET', '/auteur', 'auteur', 'auteur');

/*login et entrée dans page administration */
$router->map('POST','/login',function() use($controllerFrontEnd){
    $controllerFrontEnd->login();
});

/*CONTACT par mail*/
$router->map('GET', '/contact', 'contact', 'contact');
$router->map('POST','/contact', function () use ($controllerFrontEnd){
    $controllerFrontEnd->sendingMail();
});

/*ANNEXES*/
$router->map( 'GET', '/mentions_legales', 'mentions_legales', 'mentions_legales');
$router->map( 'GET', '/politiqueDonneesPerso', 'politiqueDonneesPerso', 'politiqueDonneesPerso');

/*------LOGIN CHAPITRES & COMMENTAIRES-----*/
$router->map('GET','/login','login');

/*CONTROLLER BACKEND*/
$controllerBackEnd = new ControllerBackEnd();


/*ADMINISTRATION - administration du site*/
$router->map('GET','/edit',function() use ($controllerBackEnd){
    $controllerBackEnd->retourEdit();
});
$router->map('POST', '/edit', 'edit', 'edit');


/*----------ADMINISTRATION CHAPITRES------------*/
/*CREATION D UN CHAPITRE*/
$router->map('GET', '/creer', function() use ($controllerBackEnd){
    $controllerBackEnd->formArticle();
});
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
/*SUPPRIMER COMMENTAIRE SIGNALE */
$router->map('POST','/commentaires-supprimer/[i:id]',function($id) use($controllerBackEnd){
     $controllerBackEnd->deleteComments($id);
});
/*APPROUVE COMMENTAIRE SIGNALE */
$router->map('POST','/commentaires-approuver/[i:id]',function($id) use($controllerBackEnd){
    $controllerBackEnd->approvedComment($id);
});


/**déconnection de l'administration */
$router->map('POST','/logout',function() use($controllerFrontEnd){
    $controllerFrontEnd->logout();
});

