<?php 
session_start();
?>
<?php
    ob_start(); 
?>

<div class="container">

    <h1>Création d'un chapitre</h1>
    <br>
    <p><small class="pull-right"><a href="edit">Retour à la page administration</a> </small><br></p>
    <form method="post" action="/creer" id="form_creer">
        <div class="form-group">
            <label for="titre">Numéro du chapitre :</label>
            <input type="text" class="form-control" name="titre" placeholder="Entrez votre titre">
        </div>
        <br>
        <div class="form-group">
            <label for="contenu">Votre texte :</label>
            <textarea id="mytextarea" name="contenu"></textarea>
        </div>
        <input type="submit" id="envoyer" placehorder="Envoyer">
        
    </form>
    
</div>

<?php
    /**
     * var $content contient tt ce qui est affiché
     */
    $content = ob_get_clean();
    require('../Views/template.php');
?>