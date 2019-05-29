<div class="container">

    <h1>Création d'un chapitre</h1>
    <br>

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

<div>
    <form action="/logout" method="post" id="deconnexion" class="deconnexion">
        <input type="submit" value="Déconnexion">
    </form>

</div>
