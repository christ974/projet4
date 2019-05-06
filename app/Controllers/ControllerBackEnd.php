<?php

namespace App\Controllers;

class ControllerBackEnd extends Controller{
/*Vérification session_star*/ 
    public function verifier(){
        if(!isset ($_SESSION['user'])){
        die('merci de vous identifier');
        }
    }
/*création de chapitre - indexViews */
    public function addArticle()
    {
        //$message = "Le chapitre est ajouté";
       //$this->verifier();
        $titre = $_REQUEST['titre'];
        $contenu = $_REQUEST['contenu'];
        
        $articleManager = new \App\Models\ArticleManager();
        $articleManager->create($titre, $contenu);
        $id = $articleManager->lastArticleId();
        
        header('Location:/article/'.$id);
        
    }
/*liste des chapitres */
    public function articlesList()
    {
        $manager = new \App\Models\ArticleManager();
        $articles = $manager->getArticles();

        require '../Views/article.php';
    }

    public function getArtis()
    {
        $manager = new \App\Models\ArticleManager();
        $artis = $manager->getArticles();

        require '../Views/modifier.php';
    }
/*modification chapitre */
    public function updateArticle($id){
        //dump($_REQUEST);
        $titre = $_REQUEST['titre'];
        $contenu = $_REQUEST['contenu'];
        //$id = $_REQUEST['id'];
        $articleManager = new \App\Models\ArticleManager();
        $art = $articleManager->update($titre, $contenu, $id);

        header('Location:/article/'.$id); 
       
    }

    public function getArts()
    {
        $manager = new \App\Models\ArticleManager();
        $arts = $manager->getArticles();

        require '../Views/supprimer.php';
    }
/*suppression chapitre */
    public function deleteArticle($id){
        $articleManager = new \App\Models\ArticleManager();
        $articleManager->delete($id);
        $commentManager = new \App\Models\CommentManager();
        $commentManager->deleteAllFromArticle($id);

        header('Location:/'); 
    }

    public function retourEdit(){
        $articleManager = new \App\Models\ArticleManager();
        $ret = $articleManager->retour();
    }

    public function getCom(){
    $manager = new \App\Models\CommentManager();
    $com = $manager->getCommentaires();
    require '../Views/commentaires.php';
    }

    public function supprimerCommentSignaler(){
        $commentManager = new \App\Models\CommentManager();
        $commentManager->deleteCommentSignale();
    }
}
