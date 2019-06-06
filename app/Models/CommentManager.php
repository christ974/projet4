<?php

namespace App\Models;

class CommentManager extends ModelManager
{
    public function __construct()
    {
        $this->bdd = $this->connect();
    }

    /**
     * récupère les commentaires d'un article à partir de son id getComments.
     * @param [type] $postId
     */
    public function getComments($postId)
    {  
        $comments = $this->bdd->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC LIMIT 0,4')or die(print_r($this->bdd->errorInfo()));

        $comments->execute(array($postId));

        return $comments;
    }
    
    /**
     * post un commentaire et l'affiche dans la page article
     * @param int $postId
     * @param  $author
     * @param  $comment
     * @return void
     */
    public function postComment($postId, $author, $comment)
    {
        $comments = $this->bdd->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));
        
        return $affectedLines;
    }

    /**
     * supprime les commentaires liés au chapitre supprimé
     * @param [type] $articleId
     * @return void
     */
    public function deleteAllFromArticle($articleId){
        $query = $this->bdd->prepare('DELETE FROM `comments` WHERE post_id = ?');
        return $query->execute(array($articleId));
    }

    /**
     * signalement d'un commentaire page article
     * @return void
     */
    public function pointOut($id){
        $comments = $this->bdd->prepare('UPDATE comments SET signaler= ? WHERE id=?');
        $comments->execute(array(true,$id));
    }

    /**
     * récupère les commentaires signalés dans page administration
     * @return void
     */
    public function getCommentsSignals()
    {  
        $comments = $this->bdd->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, signaler FROM comments WHERE signaler=true')or die(print_r($this->bdd->errorInfo()));

        $comments->execute(array());

        return $comments;
    }

    /**
     * supprime le commentaire signalé
     * @return void
     */
    public function deleteCommentSignale($id){
        $query = $this->bdd->prepare('DELETE FROM comments WHERE id=?');

        return $query->execute(array($id));
    }
    
    /**
     * approuve le commentaire signalé
     * @param [type] $id
     * @return void
     */
    public function approvedCommentSignal($id){
        $comments = $this->bdd->prepare('UPDATE comments SET signaler =? WHERE id=?');
        $comments->execute(array(0,$id));
        
        return $comments;
    }
    
    /**
     * récupère le commentaire associé au chapitre
     * @param [type] $id
     * @return void
     */
    public function articleId($id)
    {
        $req = $this->bdd->prepare("SELECT id, post_id FROM comments WHERE id=?");
        $req->execute([$id]);
        $comment = $req->fetch();
        return $comment['post_id'];
        
    }
}
