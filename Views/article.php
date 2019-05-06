<?php 
session_start();
?>
<h1>
    Billet simple pour l'Alaska
</h1>
<section id="container">
    <br><br>

    <div id="texteChap">

        <h3 id='titre'>
            <?= htmlspecialchars($article['titre']); ?><br>
        </h3>

        <p id='contenu'>
            <?= nl2br($article['contenu']); ?>
        </p>

        <span id='date'>
            le
            <?= $article['date_creation_fr']; ?>
        </span>

    </div>
    <br>
    <div id="textComm">
        <h3>Les commentaires précédents :</h3> <br>
        <?php 
            while ($comment = $comments->fetch()) {
        ?>

        <span #auteur>
            - <?= htmlspecialchars($comment['author']); ?>
        </span>
        - le
        <span #date>
            <?= $comment['comment_date_fr']; ?>
        </span>

        <p id="contenu">
            <?= nl2br(htmlspecialchars($comment['comment'])); ?>
        </p>
        <p>
            <form action="/edit" method="post">
            <button id="validation" type="submit" class="btn btn-success"<?= $signaler['comment_date_fr']; ?>>Signaler</button> 
            </form>  
        </p>
       

        <br><br>
        <?php
            }
            $comments->closeCursor(); // Termine le traitement de la requête
        ?>
    </div>
</section>

<div class=" comment">
    <h3>Commentaires :</h3>
    <br>
    <form method="post" action="/article/<?= $article['id']; ?>">

        <div class="form-group">
            <label for="author" name="author">Auteur</label>
            <input type="text" name="author" class="form-control" id="author" placeholder="Entrez votre nom">
        </div>

        <div class="form-group">
            <label for="comment">Votre commentaire</label>
            <input type="texterea" id="comment" class="form-control" name="comment" placeholder="Votre commentaire">
        </div>

        <button type="submit" class="btn btn-info">Envoyer</button>
    </form>
</div>
