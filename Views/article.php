<?php 
session_start();
?>
<!--page d'un chapitre et de ses commentaires ainsi que de leur création-->
<h1>
    Billet simple pour l'Alaska
</h1>
<section id="container">
    <div id="texteChap">
        <h3 class='titre'>
            <?= htmlspecialchars($article['titre']); ?><br>
        </h3>
        <p class='contenu'>
            <?= nl2br($article['contenu']); ?>
        </p>
        <span class='date'>
            le
            <?= htmlspecialchars($article['date_creation_fr']); ?>
        </span>
    </div>

    <div id="textComm">
        <br>
        <h3>Les commentaires précédents</h3> <br>
        <?php 
            while ($comment = $comments->fetch()) {
        ?>
        <span #auteur>
            - <?= htmlspecialchars($comment['author']); ?>
        </span>
        - le
        <span class="date">
            <?= $comment['comment_date_fr']; ?>
        </span>

        <p class="contenu">
            <?= nl2br(htmlspecialchars($comment['comment'])); ?>
        </p>
            <form action="/comments/signaler/<?= $comment['id']; ?>" method="post">
                <button type="submit" name="signaler" class="btn btn-danger">Signaler ce commentaire</button>
            </form>
            <br>

        <?php
            }
            $comments->closeCursor(); // Termine le traitement de la requête
        ?>
        <br><br>
    </div>
</section>

<div class="comment">
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
