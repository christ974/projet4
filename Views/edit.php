<?php 
session_start();
?>

<?php ob_start(); ?>
 

<div class="container">
    <h1>Espace administration "Billet simple pour l'Alaska"</h1>
    <br>
    <img class="imgEdit" src="https://spotlight.it-notes.ru/wp-content/uploads/2017/11/40113cec348c272dbd86dd17d62654c9.jpg" alt="Immensité, image d'un canyon de neige d'un camaïeu bleu très froid au fond duquel coule une rivière grise">
    <br><br>
    <h3>Cliquez sur le lien de votre choix</h3>
    <br>
    <div class="operations">
        <div id="mod">  
            <h5>-*-*-*-*-* Gérer les chapitres -*-*-*-*-*</h5> <br>
            <ul>
                <li> <a href="/creer">Créer un chapitre</a></li>
                <br>
                <li><a href="/modifier">Lire ou modifier un chapitre</a></li>
                <br>
                <li><a href="/supprimer">Supprimer un chapitre</a></li>
                <br>
            </ul>
        </div>
        <div id="comm">
            <h5>-*-*-*-*-* Gérer les commentaires -*-*-*-*-*</h5> <br>
            <ul>
                    <li> <a href="/commentaires">Liste des commentaires</a></li>
                    <br>
                    <li><a href="/">Supprimer un commentaire</a></li>
                    <br>
                    <li><a href="/">Approuver le commentaire</a></li>
                    <br>
                </ul>
        </div>
    </div>
    <?php
    /*}
    else 
    {
        echo "<br><br><br><br><br><br><br><br><p>Erreur d'identification !<br> Veuillez réessayer ou vous n'êtes pas autorisé à vous connecté à cette section</p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    }*/
?>
</div>
<?php 
    $content = ob_get_clean(); 
    require('../Views/template.php');
?>