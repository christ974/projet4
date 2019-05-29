<?php
namespace App\Models;

class ArticleManager extends ModelManager
{
    public function __construct()
    {
        $this->bdd = $this->connect();
    }
    /**affichage des chapitres */
    public function getArticles()
    {
        $req = $this->bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM articles ORDER BY date_creation ASC');
        
        return $req;
    }

    /**affichage 1 chapitre */
    public function getArticle($id)
    {
        $req = $this->bdd->query("SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM articles WHERE id=?");
        $req->execute(array($id));
        $article = $req->fetch();
        
        return $article;
    }

/**création d'un chapitre */
    public function create($titre, $contenu)
    {
        $chap = $this->bdd->prepare('INSERT INTO articles (titre, contenu, date_creation) VALUES(?, ?,  NOW())');
        $chap->execute(array($titre, $contenu));
        
        return $chap;
    }

/**récup du dernier chapitre */
    public function lastArticleId(){
        $req = $this->bdd->query("SELECT id FROM articles ORDER BY id DESC LIMIT 0,1");
        $req->execute();
        $article = $req->fetch();
        
        return $article['id'];
    }

/**modification d'un chapitre */
    public function update($titre, $contenu,$id)
    {
        $art = $this->bdd->prepare('UPDATE articles SET titre = ?, contenu= ?, date_modif= NOW() WHERE id = ?');
        $art->execute(array($titre, $contenu, $id));
        
        return $art;
    }

/**suppression d'un chapitre */
    public function delete($id)
    {
        $req = $this->bdd->prepare('DELETE FROM articles WHERE id=?');
        $req->execute(array($id));
        
        return $req;  
    }
    
    public function retour(){
        require 'Views/edit.php';
    }
        
}
