<div class="container">

    <h1>Modifier un chapitre</h1>

    <h3>Liste des chapitres</h3>

    <?php 
        while ($donnees = $artis->fetch()) {
    ?>


    <form method="post" action="/modifier/<?= $donnees['id'] ?>" id="form_modif">

        <div class="form-group">
            <label for="titre"><?=htmlspecialchars($donnees['titre'])?></label>
            <input type="text" class="form-control" name="titre" placeholder="N'oubliez pas d'entrer votre titre" value="<?=htmlspecialchars($donnees['titre'])?>">
        </div>
        <br>
        <div class="form-group">
            <textarea id="mytextarea" name="contenu">
                <?=  $donnees['contenu']. '<br>' ?>
             </textarea>
        </div>
        <br>
        <input type="submit" name="modifier" id="modifier" value="Modifier">
        <br><br>

    </form>

    <?php
    }
    $artis->closeCursor(); // Termine le traitement de la requête
  ?>
</div>

<div>
    <form action="/logout" method="post" id="deconnexion" class="deconnexion">
        <input type="submit" value="Déconnexion">
    </form>
</div>
