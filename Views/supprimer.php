<div class="container">

    <h1>Supprimer un chapitre</h1>

    <h3>Liste des chapitres</h3>

    <?php
        while ($req =$arts->fetch()){
    ?>

    <form method="post" action="/supprimer/<?= $req['id'] ?>" id="form_suppr">
        <ul>
            <li><label for="titre"><?=htmlspecialchars($req['titre'])?></label></li>
        </ul>

        <input type="submit" name="supprimer" id="supprimer" value="Supprimer">
        <br><br>
    </form>

    <?php
        }
        $arts->closeCursor();
    ?>

</div>

<div>
    <form action="/logout" method="post" id="deconnexion" class="deconnexion">
        <input type="submit" value="Déconnexion">
    </form>

</div>
