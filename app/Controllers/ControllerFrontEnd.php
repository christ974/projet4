<?php

namespace App\Controllers;

class ControllerFrontEnd extends Controller{

     /**
     * liste des chapitres
     * @return void
     */
    public function listArticles()
    {
        $manager = new \App\Models\ArticleManager();
        $articles = $manager->getArticles();

        $this->view("indexView",['articles' => $articles]);
    }
    
     /**
     * récupère chapitre & commentaires associés
     * @return void
     */
    public function article($id)
    { 
        $articleModel = new \App\Models\Article();
        $commentManager = new \App\Models\CommentManager();

        $article = $articleModel->getArticle($id);
        $comments = $commentManager->getComments($id);

        $this->view("article",['article' => $article, 'comments'=>$comments]);

    }
    
     /**
     * poster un commentaire
     * @return void
     */
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
    
     /**
     * signale un commentaire
     * @return void
     */
    public function reportComment($id)
    {
        $commentManager = new \App\Models\CommentManager();
        $commentManager->pointOut($id);
        $articleId = $commentManager->articleId($id);
        
       header('Location:/article/'.$articleId);
    }
    
     /**
     * envoi de mail
     * @return void
     */
    public function sendingMail()
    {
        $errors = [];

        if (!array_key_exists('txtName', $_POST) || $_POST['txtName'] == ''){
            $errors['txtName'] = "Le champs nom n'est pas complété !";
        }
        if (!array_key_exists('txtEmail', $_POST) || $_POST['txtEmail'] == '' || filter_var($_POST['txtEmail'], !FILTER_VALIDATE_EMAIL)){
            $errors['txtEmail'] = "Le champs émail n'est pas valide";
        }
        if (!array_key_exists('txtMsg', $_POST) || $_POST['txtMsg'] == ''){
            $errors['txtMsg'] = "Le champs message n'est pas complété !";
        }
        session_start();

        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            $_SESSION['inputs'] = $_POST;
            header('Location: /contact');
        }else{
            $_SESSION['success'] = 1;
            $message = $_POST['txtMsg'];
            
            mail('forterochejann@gmail.com','Formulaire de contact', $message);
            header('Location: /contact');
        }
    } 
}
