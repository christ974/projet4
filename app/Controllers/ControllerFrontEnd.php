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
    
    public function signalerComment($id){
        $commentManager = new \App\Models\CommentManager();
        $commentManager->signaler($id);
        $articleId = $commentManager->articleId($id);
        
        header('Location:/article/'.$articleId);
    }
    
   public function envoiMail(){
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
