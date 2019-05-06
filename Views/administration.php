<?php 
session_start();
?>
<?php
    ob_start(); 
?>

<div class="container">
<div class="editeur">
    <br>
    <p>Pour accéder à l'espace administration, merci de vous identifier :</p>

    <form action="/login" method="post">

        <div class="form-group">
            <label for="pseudo">Votre pseudo :</label>
            <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo">
        </div>
        <div class="form-group">
            <label for="motDePass">Mot de passe</label>
            <input type="password" name="motDePass" class="form-control" id="motDePass" placeholder="Mot de passe">
        </div>
        <button id="validation" type="submit" class="btn btn-success">Se connecter</button>
        <br>
    </form>
    <br>

</div>
</div>
<?php
    $content = ob_get_clean();
    require('../Views/template.php');
?>