<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Blog Jann Forteroche</title>
        <!-- Référencement début -->
        <meta name="description" content="Les éditions A.E.E. présentent le dernier opus de l'aventurier et écrivain Jann Forteroche 'Billet simple pour l'Alaska'. Découvrez tous les mois, un chapitre inédit." />

        <!-- Schema.org meta pour Google+ -->
        <meta itemprop="name" content="Blog Jann Forteroche, son dernier opus 'Billet simple pour l'Alaska'">
        <meta itemprop="description" content="Les éditions A.E.E. présentent le dernier opus de l'aventurier et écrivain Jann Forteroche 'Billet simple pour l'Alaska'. Découvrez tous les mois, un chapitre inédit.">
        <meta itemprop="image" content="https://www.exemple.com/wa_files/image-google.png">

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
        <meta property="og:description" content="Les éditions A.E.E. présentent le dernier opus de l'aventurier et écrivain Jann Forteroche 'Billet simple pour l'Alaska'. Découvrez tous les mois, un chapitre inédit."/>
        <meta property="og:site_name" content="Blog Jann Forteroche, son dernier opus 'Billet simple pour l'Alaska'" />
        <!-- Référencement fin -->
        
        <link href="/css/style.css" rel="stylesheet" /> 
        <script src='https://cloud.tinymce.com/5/tinymce.min.js?ct1gvv698ohpp1cy6r3mu86ggrfcs7p7321ez8cm72qgkltr'></script>
        <script>
    tinymce.init({
        selector: 'textarea',
        language_url : '../public/Language/fr_FR.js'
        //language_url: 'public/Language/fr_FR.js'
    });
</script>
    </head>
       
    <body>
        <div id="accueil">
            <header>
                <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                    
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/auteur">Ecrivaine</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/administration">Administration</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>
    
        <p><?= $content; ?></p>

        <footer id="#footer">
            <p>
                <a class="footerInfo" href="../mentions_legales" target="_blank">Mentions légales </a>&amp;
                <a class="footerInfo" href="../politiqueDonneesPerso" target="_blank"> Politique des Données Personnelles</a>
            </p>
            <p>
                Copyright 2019 - Billet simple pour l'Alaska<i class="fas fa-bicycle"></i> - Projet 4 - Christèle Garreau - Run - OpenClassRooms
            </p>
        </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>