<?php 
  session_start();
?>
<?php
  ob_start(); 
?>

<div class="container">

  <h1>Supprimer un chapitre</h1>

  <h3>Liste des chapitres</h3>

  <p><small class="pull-right"><a href="edit">Retour à la page administration</a> </small><br></p>

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
<?php
  $content = ob_get_clean();
  require('../Views/template.php');
?>