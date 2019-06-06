<div class="container">
 <!--page d'administration des commentaires-->  
    <h1>Administration des commentaires</h1>
    <br>
    <h3>Commentaires signalés</h3>
    <br>
    <?php
    while($req = $com->fetch()){
    ?>

    <form method="POST" action="/commentaires-supprimer/<?= $req['id']; ?>" id="<?= $req['id']; ?>">
        <input type="submit" class="btn btn-danger btn-circle" name="suppression" id="suppression" value="supprimer">
    </form> <span #auteur>

        - <?= nl2br (htmlspecialchars($req['author'])); ?>
    </span>
    - le
    <span class="date">
        <?= $req['comment_date_fr']; ?>

        <form method="POST" action="/commentaires-approuver/<?= $req['id']; ?>" id="<?= $req['id']; ?>">
            <input type="submit" class="btn btn-warning btn-circle" name="approuver" id="approuver" value="approuver">
        </form></span>

    <p class="contenu">
        <?= nl2br(htmlspecialchars($req['comment'])); ?>
    </p>
    <br>

    <?php
        }
        $com->closeCursor(); // Termine le traitement de la requête
    ?>
</div>

<form action="/logout" method="post" id="deconnexion" class="deconnexion">
    <input type="submit" value="Déconnexion">
</form>
 <br>
