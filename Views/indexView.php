<?php 
session_start();
?>
<h1>
    Billet simple pour l'Alaska
</h1>
<br>

<div class="container">
    <div class="carousel">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://www.carnets-de-traverse.com/blog/wp-content/uploads/2015/02/alaska-roadtrip12.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Seule au monde</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.visittheusa.fr/sites/default/files/styles/hero_m_1300x700/public/images/hero_media_image/2017-02/Alaska8_Web72DPI_2.jpg?itok=2T1bWB1V" alt="Second slide" ">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Danse aquatique</h5>
                    </div>
                </div>
                <div class="carousel-item">
                 <img class="d-block w-100" src="https://spotlight.it-notes.ru/wp-content/uploads/2017/11/40113cec348c272dbd86dd17d62654c9.jpg" alt="Third slide">
                 <div class="carousel-caption d-none d-md-block">
                     <h5>Vie sous-glace</h5>
                 </div>
             </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"> Previous </span> </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"> Next </span> </a>
        </div>

    </div>


    <section id="dernierChapitre">

        <p id="pretitre">Jann Forteroche, actrice et écrivaine, vous propose son dernier roman en primeur ! Il est à découvrir au fil du temps</p>
        <h3>
            Chapitres à votre disposition :
        </h3>
        <br>
        <p>
            <?php 
            while ($donnees = $articles->fetch()) {
            ?>
            <span class='titre'>
                - <?=htmlspecialchars($donnees['titre'])?> -
            </span>
            <span class="date">
                le <?= $donnees['date_creation_fr'] ?>
            </span>
            <p class='contenu'>
                <?=  substr(($donnees['contenu']),0, 500). '...<br> <a href="/article/'.$donnees['id'].'">Lire la suite - </a>' ?>
                <a class="commentaires" href="article/<?=$donnees['id'] ?>">
                    Voir les commentaires
                </a><br><br>
                <span class="separator"></span>
            </p>

            <?php
            }
                $articles->closeCursor(); // Termine le traitement de la requête
            ?>

            <br>

    </section>

</div>
