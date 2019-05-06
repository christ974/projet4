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
     *
     * @param [type] $postId
     */
    public function getComments($postId)
    {  
        $comments = $this->bdd->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC LIMIT 0,4')or die(print_r($this->bdd->errorInfo()));

        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment)
    {
        $comments = $this->bdd->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));
        
        return $affectedLines;
    }
    public function deleteAllFromArticle($articleId){
        $query = $this->bdd->prepare('DELETE FROM `comments` WHERE post_id = ?');
        return $query->execute(array($articleId));
    }
    public function getCommentaires()
    {  
        $comments = $this->bdd->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr, signaler FROM comments WHERE signaler=true')or die(print_r($this->bdd->errorInfo()));

        $comments->execute(array());

        return $comments;
    }
    public function deleteCommentSignale(){
        $query = $this->bdd->prepare('DELETE FROM `comments` WHERE signaler = true');
        return $query->execute(array());
    }
}
