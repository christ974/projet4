<?php

namespace App\Models;

class Article extends ModelManager
{
    public function __construct()
    {
        $this->bdd = $this->connect();
    }

    /**
     * récupère un article par son id getChapitre.
     *
     * @param [type] $articleId
     */
    public function getArticle($id)
    { 
        $req = $this->bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM articles WHERE id=?');
        $req->execute(array($id));
        $article = $req->fetch();

        return $article;
    }

}