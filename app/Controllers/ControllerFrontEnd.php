<?php

namespace App\Controllers;

class ControllerFrontEnd extends Controller{


    public function listArticles()
    {
        $manager = new \App\Models\ArticleManager();
        $articles = $manager->getArticles();
        //require '../Views/indexView.php';
        $this->view("indexView",['articles' => $articles]);
    }

    public function article($id)
    { 
        $articleModel = new \App\Models\Article();
        $commentManager = new \App\Models\CommentManager();

        $article = $articleModel->getArticle($id);
        $comments = $commentManager->getComments($id);

        //require '../Views/article.php';
        $this->view("article",['article' => $article, 'comments'=>$comments]);
    }

    public function addComment($articleId)
    {
        $author = $_REQUEST['author'];
        $comment = $_REQUEST['comment'];
        
        $commentManager = new \App\Models\CommentManager();
        $affecteddLines = $commentManager->postComment($articleId, $author, $comment);

        if ($affecteddLines === false) {
            die("Impossible d'ajouter un commentaire.");
        } else {
            header('Location:/article/'.$articleId);
        }
    }
    public function login(){
        if ($_REQUEST['pseudo'] ==="jean" && $_REQUEST['motDePass'] === 'bonjour' || $_REQUEST['pseudo'] ==="christ" && $_REQUEST['motDePass'] === 'bonjour' || $_REQUEST['pseudo'] ==="david" && $_REQUEST['motDePass'] === 'bonjour')
    {
        header('Location:/edit');
        session_start();
        $_SESSION['user'] = $_REQUEST['pseudo'];
    }else{
        echo "Erreur d'identication, vous n'êtes pas autorisé(e) à vous connecter à cette section!";
        //header('Location:/login');
    }
    }
   
 
    
}
