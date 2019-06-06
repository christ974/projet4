<?php

namespace App\Controllers;

class ControllerBackEnd extends Controller
{
    public function __construct(){

       // $this->check();
    }
    
/*Vérification session_start*/ 
    public function check()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if(!isset ($_SESSION['user'])){
            header('Location:/login');
            exit();
        }
    }

    /**
     * création de chapitre et renvoi au dernier chapitre
     * créé dans indexViews
     * @return void
     */
    public function addArticle()
    {
        $this->check();
        $titre = $_REQUEST['titre'];
        $contenu = $_REQUEST['contenu'];
        
        $articleManager = new \App\Models\ArticleManager();
        $articleManager->create($titre, $contenu);
        $id = $articleManager->lastArticleId();
        
        header('Location:/article/'.$id);
    }

    /**
     * liste des chapitres
     * @return void
     */
    public function articlesList()
    {
        $this->check();
        $manager = new \App\Models\ArticleManager();
        $articles = $manager->getArticles();

        $this->view("article",['articles' => $articles]);
    }

    /**
     * liste des chapitres
     * @return void
     */
    public function getArtis()
    {
        $this->check();
        $manager = new \App\Models\ArticleManager();
        $artis = $manager->getArticles();

        $this->view("modifier", ['artis' => $artis
        ]);
    }

    /**
     * modification chapitre
     * @param int $id
     * @return void
     */
    public function updateArticle($id)
    {
        $this->check();
        $titre = $_REQUEST['titre'];
        $contenu = $_REQUEST['contenu'];
        //$id = $_REQUEST['id'];
        $articleManager = new \App\Models\ArticleManager();
        $art = $articleManager->update($titre, $contenu, $id);

        header('Location:/article/'.$id); 
    }
    
    /**
     * liste des chapitres
     * @return void
     */
    public function getArts()
    {   
        $this->check();
        $manager = new \App\Models\ArticleManager();
        $arts = $manager->getArticles();

        $this->view("supprimer", ['arts' => $arts
        ]);
    }

    /**
     * suppression chapitre
     * @param [type] $id
     * @return void
     */
    public function deleteArticle($id)
    {
        $articleManager = new \App\Models\ArticleManager();
        $articleManager->delete($id);
        $commentManager = new \App\Models\CommentManager();
        $commentManager->deleteAllFromArticle($id);

        header('Location:/'); 
    }

    public function retourEdit()
    {
        $this->check();
        $articleManager = new \App\Models\ArticleManager();
        $ret = $articleManager->retour();
    }

    /**
     * récupère les commentaires signalés
     * @return void
     */
    public function getCom()
    {
        $this->check();
        $manager = new \App\Models\CommentManager();
        $com = $manager->getCommentsSignals();

        $this->view("commentaires", ['com' => $com
        ]);
    }

    /**
     * supprime le commentaire signalé
     * @return void
     */
    public function deleteComments($id)
    {
        $commentManager = new \App\Models\CommentManager();
        $commentManager->deleteCommentSignale($id);

        header('Location:/commentaires'); 
    }
    /**
     * approuve les commentaires signalés
     * @return void
     */
    public function approvedComment($id)
    {
        $commentManager = new \App\Models\CommentManager();
        $commentManager->approvedCommentSignal($id);

        header('Location:/commentaires');
    }
    
    public function formArticle()
    {
        $this->check();
        $this->view("creer", []);
    }

   
}

