<?php 
session_start();
?>
<?php ob_start(); ?>

<div class="container">
    <h1>Espace administration "Billet simple pour l'Alaska"</h1>
    <br>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://www.carnets-de-traverse.com/blog/wp-content/uploads/2015/02/alaska-roadtrip12.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Seule au monde</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.visittheusa.fr/sites/default/files/styles/hero_m_1300x700/public/images/hero_media_image/2017-02/Alaska8_Web72DPI_2.jpg?itok=2T1bWB1V" alt="Second slide">
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
    <br><br>

    <div class="operations">
        <div id="mod">
            <h3>Chapitres</h3> <br>
            <ul classe="puces">
                <li> <a href="/creer">Créer un chapitre</a></li>
                <br>
                <li><a href="/modifier">Modifier un chapitre</a></li>
                <br>
                <li><a href="/supprimer">Supprimer un chapitre</a></li>
                <br>
            </ul>
        </div>
        <div id="comm">
            <h3>Commentaires signalés</h3> <br>
            <ul classe="puces">
                <li> <a href="/commentaires">Supprimer ou approuver</a></li>
                <br>

            </ul>
        </div>
    </div>

    <form action="/logout" method="post" id="deconnexion" class="deconnexion">
        <input type="submit" value="Déconnexion">
    </form>

</div>
<?php 
    $content = ob_get_clean(); 
    require('Views/template.php');
?>
