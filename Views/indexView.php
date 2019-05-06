<?php 
session_start();
?>
<h1>
    Billet simple pour l'Alaska
</h1>
<br>

<div class="container">
    
    <div id="carousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://www.carnets-de-traverse.com/blog/wp-content/uploads/2015/02/alaska-roadtrip12.jpg" alt="Femme seule de dos sur la ligne jaune au milieu d'une route dans un paysage montagneux">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.visittheusa.fr/sites/default/files/styles/hero_m_1300x700/public/images/hero_media_image/2017-02/Alaska8_Web72DPI_2.jpg?itok=2T1bWB1V" alt="Alaska rêvée, image d'une baleine sautant hors de l'eau avec en arrière plan un paysage montagneux enneigé">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://spotlight.it-notes.ru/wp-content/uploads/2017/11/40113cec348c272dbd86dd17d62654c9.jpg" alt="Immensité, image d'un canyon de neige d'un camaïeu bleu très froid au fond duquel coule une rivière grise">
            </div>
        </div>
       
    </div>

    <section id="dernierChapitre">

        <p>Jann Forteroche, actrice et écrivaine, vous propose son dernier roman en primeur ! Il est à découvrir au fil du temps</p>
        <h3>
            Chapitres à votre disposition :
        </h3>
        <br>
        <p>
            <?php 
            while ($donnees = $articles->fetch()) {
            ?>
            <span id='titre'>
                - <?=htmlspecialchars($donnees['titre'])?> -
            </span>
            <span id="date">
                le <?= $donnees['date_creation_fr'] ?>
            </span>
            <p id='contenu'>
                <?=  substr(($donnees['contenu']),0, 500). '...<br> <a href="/article/'.$donnees['id'].'">Lire la suite - </a>' ?>
                <a class="commentaires" href="article/<?=$donnees['id'] ?>">
                    Voir les commentaires
                </a><br><br>
               <span id="separator"> *-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-</span>
            </p>
        
            <?php
            }
        $articles->closeCursor(); // Termine le traitement de la requête
            ?>

<br>
<!--<div class="editeur">
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

</div>-->

</section>
    
</div>
