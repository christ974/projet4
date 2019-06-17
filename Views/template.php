<!DOCTYPE html>
<html lang="fr">
<!--page modèle-->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Blog Jann Forteroche</title>
    
    <!-- Référencement début -->
    <meta name="description" content="Les éditions A.E.E. présentent le dernier opus de l'aventurière et écrivaien Jann Forteroche 'Billet simple pour l'Alaska'. Découvrez tous les mois, un chapitre inédit." />

    <!-- Schema.org meta pour Google+ -->
    <meta property="name" content="Blog Jann Forteroche, son dernier opus 'Billet simple pour l'Alaska'">
    <meta property="description" content="Les éditions A.E.E. présentent le dernier opus de l'aventurière et écrivaine Jann Forteroche 'Billet simple pour l'Alaska'. Découvrez tous les mois, un chapitre inédit.">
    <meta property="image" content="https://www.exemple.com/wa_files/image-google.png">

    <!-- Card meta pour Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@nomtwitter">
    <meta name="twitter:title" content="Blog Jann Forteroche, son dernier opus 'Billet simple pour l'Alaska'">
    <!-- Twitter summary card avec image large de 280x150px -->
    <meta name="twitter:image:src" content="https://www.exemple.com/wa_files/image-twitter.png">

    <!-- Open Graph meta pour Facebook -->
    <meta property="og:title" content="Blog Jann Forteroche, son dernier opus 'Billet simple pour l'Alaska'" />
    <meta property="og:url" content="https://files.000webhost.com/" />
    <meta property="og:image" content="https://exemple.com/wa_files/image-fb.png" />
    <meta property="og:description" content="Les éditions A.E.E. présentent le dernier opus de l'aventurière et écrivaine Jann Forteroche 'Billet simple pour l'Alaska'. Découvrez tous les mois, un chapitre inédit." />
    <meta property="og:site_name" content="Blog Jann Forteroche, son dernier opus 'Billet simple pour l'Alaska'" />
    <!-- Référencement fin -->
   
    <link href="/css/style.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <script src='https://cloud.tinymce.com/5/tinymce.min.js?apiKey=ct1gvv698ohpp1cy6r3mu86ggrfcs7p7321ez8cm72qgkltr'></script>
    <script>
            tinymce.init({
            selector: '.mytextarea',
            language_url : '/Language/fr_FR.js',
            language: 'fr_FR'
        });
    </script>
    
</head>

<body>
    <div id="accueil">

        <header>

            <div class="container-fluide">

                <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark fixed-top">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 nav nav-pills nav-justified" role="navigation">
                            <li class="nav-item"> <a class="nav-link" href="/" active> Accueil <span class="sr-only"> (current) </span></a> </li>
                            <li class="nav-item"> <a class="nav-link" href="/auteur"> Auteure </a> </li>
                            
                            <li class="nav-item"> <a class="nav-link " href="/contact"> Contact </a> </li>
                            
                                <?php  if(isset ($_SESSION['user'])){ ?>  
                                    <li class="nav-item"> <a active class="nav-link" href="/edit">Administration</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="/creer">Créer</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/modifier">Modifier</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/supprimer">Supprimer</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="/commentaires">Commentaires</a></li>
                                    
                                    <li><form action="/logout" method="post" id="deconnexion" class="deconnexion">
                                     <input type="submit" class="btn btn-outline-secondary" value="Déconnexion">
                                    </form></li>
                                <?php }else{ ?>
                                <li class="nav-item"> <a class="nav-link" role="button" href="/login"> Connexion </a> </li>
                                <?php }; ?>
                        </ul>

                    </div>
                </nav>
            </div>
        </header>
    </div>

    <?= $content; ?>

    <footer id="#footer">
        <p class="autres">
            <a class="footerInfo" href="../mentions_legales" target="_blank">Mentions légales </a>&amp;
            <a class="footerInfo" href="../politiqueDonneesPerso" target="_blank"> Politique des Données Personnelle</a> &amp;
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                    alt="CSS Valide !" />
            </a>
        </p>
        <p class="autres">
            Copyright 2019 - Billet simple pour l'Alaska - Mission 4 - Christèle Garreau - Run - OpenClassRooms
        </p>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
