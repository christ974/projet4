<?php 
session_start();
?>
<?php
  ob_start(); 
?>

<!--<a href="/edit">Retourner à la page Administration</a>-->

<div class="container">

  <h1>Lire et modifier un chapitre</h1>

  <p><small class="pull-right"><a href="edit">Retour à la page administration</a> </small><br></p>

  <h3>Liste des chapitres</h3>
  
  <?php 
    while ($donnees = $artis->fetch()) {
  ?>
      

  <form method="post" action="/modifier/<?= $donnees['id'] ?>" id="form_modif">

    <div class="form-group">
      <label for="titre"><?=htmlspecialchars($donnees['titre'])?></label>
      <input type="text" class="form-control" name="titre"  placeholder="Entrez votre titre">
    </div>
    <br> 
    <div class="form-group">
      <textarea id="mytextarea" class='mytextarea' name="contenu">
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

<?php
  $content = ob_get_clean();
  require('../Views/template.php');
?>