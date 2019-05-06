<?php 
session_start();
?>
<?php
    ob_start(); 
?>
<div class="container">
    <h1>Administration des commentaires</h1>
    <br>
    <h3>Commentaires</h3>
    <?php
        while($commentaire = $com->fetch()){
            //dump($com); die();
    ?>
   <!-- <section id="commentaire">
        <button type="button" class="btn btn-warning btn-circle btn-xl">supprimer</button>

        <button type="button" class="btn btn-danger btn-circle btn-xl">confirmer</button>
    </section>-->
    
    <span #auteur>
    <button type="submit" class="btn btn-success btn-circle" name="suppression">supprimer</button>
            - <?=nl2br (htmlspecialchars($commentaire['author'])); ?>
            
    </span>
        - le
        <span #date>
            <?= $commentaire['comment_date_fr']; ?>
            <button type="submit" name="approuver"class="btn btn-primary btn-circle">approuver</button>
        </span>

        <p id="contenu">
            <?= nl2br(htmlspecialchars($commentaire['comment'])); ?>
           
        </p>
        
  <?php
        }
        $com->closeCursor(); // Termine le traitement de la requête
    ?>  
</div>
<?php
    $content = ob_get_clean();
    require('../Views/template.php');
?>