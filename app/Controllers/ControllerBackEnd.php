<?php

namespace App\Controllers;

class ControllerBackEnd extends Controller{

    public function __construct(){

        //$this->verifier();
    }
/*Vérification session_star*/ 
    public function verifier(){
       
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if(!isset ($_SESSION['user'])){

            header('Location:/login');
            exit();
        }else{
           
        }
    }

    /**
     * création de chapitre - indexViews
     *
     * @return void
     */
    public function addArticle()
    {
        //$this->verifier();
        //$message = "Le chapitre est ajouté";
        $titre = $_REQUEST['titre'];
        $contenu = $_REQUEST['contenu'];
        
        $articleManager = new \App\Models\ArticleManager();
        $articleManager->create($titre, $contenu);
        $id = $articleManager->lastArticleId();
        
        header('Location:/article/'.$id);
        
    }

    /**
     * liste des chapitres
     *
     * @return void
     */
    public function articlesList()
    {
        $manager = new \App\Models\ArticleManager();
        $articles = $manager->getArticles();

        $this->view("article",['articles' => $articles]);
    }

    public function getArtis()
    {
        $manager = new \App\Models\ArticleManager();
        $artis = $manager->getArticles();

        //require 'Views/modifier.php';
        $this->view("modifier", ['artis' => $artis
        ]);
    }

    /**
     * modification chapitre
     *
     * @param int $id
     * @return void
     */
    public function updateArticle($id){
        //$this->verifier();
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

        $this->view("supprimer", ['arts' => $arts
        ]);
    }

    /**
     * suppression chapitre
     *
     * @param [type] $id
     * @return void
     */
    public function deleteArticle($id){
        $articleManager = new \App\Models\ArticleManager();
        $articleManager->delete($id);
        $commentManager = new \App\Models\CommentManager();
        $commentManager->deleteAllFromArticle($id);

        header('Location:/'); 
    }

    public function retourEdit(){
        //$this->verifier();
        $articleManager = new \App\Models\ArticleManager();
        $ret = $articleManager->retour();
    }

    /**
     * récupère les commentaires signalés
     *
     * @return void
     */
    public function getCom(){
        //$this->verifier();
        $manager = new \App\Models\CommentManager();
        $com = $manager->getCommentaires();

        $this->view("commentaires", ['com' => $com
        ]);
    }

    /**
     * supprime le commentaire signalé
     *
     * @return void
     */
    public function deleteComments($id){
        //$this->verifier();
        $commentManager = new \App\Models\CommentManager();
        $commentManager->deleteCommentSignale($id);

        header('Location:/commentaires'); 
    }

    public function approuveComment($id){

        $commentManager = new \App\Models\CommentManager();
        $commentManager->approuveCommentSignale($id);

        header('Location:/commentaires');
    }
    
    public function formArticle(){
        $this->verifier();
        $this->view("creer", []);
    }

   
}
