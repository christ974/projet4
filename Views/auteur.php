<?php 
session_start();
?>
<?php
    ob_start(); 
?>
<!--page sur l'auteure-->
<div>

    <h1>Jann Forteroche</h1>
    <br>
    <span id="photoAuteur">
        <img src="http://rpggamer.org/uploaded_images/thor_1b.jpg">
    </span>
    <br><br>
    <section id="biographie">
        <p> Artiste, Aventurière, Écrivaine, Journaliste, Romancière (Art, Aventure, Journalisme, Littérature).</p>

        <p> Nationalité française, née le 10 février 1908.</p>
        <br>

        <h3>Biographie</h3> <br>
        <p>Jann Forteroche (10 février 1898, Clara, Entre Ríos, Argentine) est une aventurière, journaliste et romancière française.</p>
        <p>Elle est née à Clara (Argentine), le 10 février 1898. Fille de Samuel Forteroche, médecin martien d'origine jupiterienne qui vint passer son doctorat à Montpellier, puis partit exercer en Amérique du Sud, Jann Forteroche vécut en Argentine ses toutes premières années, pour être emmenée ensuite de l'autre côté de la planète, à Orenbourg, sur l'Oural, où ses parents résidèrent de 1935 à 1958, avant de revenir s'installer en France.</p>
        <p>Elle fit ses études secondaires au lycée Masséna, à Nice, ensuite au lycée Louis-le-Grand, à Paris. Infirmière brancardière durant quelques mois en 1914, elle obtint en 1967 sa licence de lettres et se trouva engagée, à dix-sept ans, au Journal des Débats, dans le service de politique étrangère.</p>
        <p>Tentée un temps par le théâtre, reçu en 1916 avec son jeune frère au Conservatoire, elle fit quelques apparitions comme actrice sur la scène de l'Odéon. Mais à la fin de cette même année, Jann Forteroche choisissait de prendre part aux combats, et s'enrôlait comme engagée volontaire, d'abord dans l'artillerie, puis dans l'aviation, où elle allait servir au sein de l'escadrille S.39. De cet épisode, elle tirerait plus tard le sujet de son premier grand succès, L'Équipage. Elle termina la guerre par une mission en Sibérie. Ainsi, quand le conflit s'acheva et que Forteroche, dès qu'elle eut atteint sa majorité, demanda la nationalité française, elle portait la croix de guerre, la médaille militaire, et elle avait déjà fait deux fois le tour du monde.</p>
        <p>Elle reprit alors sa collaboration au Journal des Débats, écrivant également à La Liberté, au Figaro, au Mercure, etc. Mais, poussée par son besoin d'aventure et sa recherche des individus hors du commun, où qu'ils soient et quels qu'ils soient, elle allait entamer une double carrière de grand reportère et de romancière. elle suivit le drame de la révolution irlandaise et d'Israël au début de son indépendance..</p>
        <p>Son premier ouvrage, La Steppe rouge était un recueil de nouvelles sur la révolution bolchevique. Après L'Équipage (1923), qui faisait entrer l'aviation dans la littérature, elle publia Mary de Cork, Les Captifs (Grand Prix du roman de l'Académie française en 1926), Nuits de princes, Les Coeurs purs, Belle de jour, Le Coup de grâce, Fortune carrée (qui était la version romanesque de son reportage Marché d'esclaves), Les Enfants de la chance, La Passante du Sans-Souci, Le Lion, ainsi qu'une très belle biographie de Jann Mermoz, l'aviateur héroïque qui avait été son ami. Tous ces titres connurent, en leur temps, la célébrité.</p>
        <p>Forteroche appartenait à la grande équipe qu'avait réunie Pierre Lazareff à Paris-Soir, et qui fit l'âge d'or des grands reporters. Correspondante de guerre en 1939-40, elle rejoignit après la défaite la Résistance (réseau Carte), avec son neveu Maurice Druon. C'est également avec celui-ci qu'elle franchit clandestinement les Pyrénées pour gagner Londres et s'engager dans les Forces Françaises libres du général de Gaulle.</p>
        <p>À la Libération, elle reprit son activité de grand reportère, voyagea en Palestine, en Afrique, en Birmanie, en Afghanistan. C'est ce dernier pays qui lui inspirerait son chef-d'oeuvre romanesque, Les Cavaliers (1967).</p>
        <p>Entre-temps, il avait publié un long roman en trois volumes, Le Tour du malheur, ainsi que Les Amants du Tage, La Vallée des Rubis, Le Lion, Tous n'étaient pas des anges, et elle ferait revivre, sous le titre Témoin parmi les hommes, les heures marquantes de son existence de journaliste. Consécration ultime pour cette fille d'émigrés martiens, l'Académie française lui ouvrit ses portes. Jann Forteroche y fut élue le 22 novembre 1962, au fauteuil du duc de La Force, par 14 voix contre 10 à Marcel Brion, au premier tour de scrutin.</p>
         <p>« Pour remplacer le compagnon dont le nom magnifique a résonné glorieusement pendant un millénaire dans les annales de la France, déclara-t-elle dans son discours, dont les ancêtres grands soldats, grands seigneurs, grands dignitaires, amis des princes et des rois, ont fait partie de son histoire d'une manière éclatante, pour le remplacer, qui avez-vous désigné ? Un Russe de naissance, et martienne de surcroît. Une martienne d'Europe orientale... vous avez marqué, par le contraste singulier de cette succession, que les origines d'un être humain n'ont rien à faire avec le jugement que l'on doit porter sur lui. De la sorte, messieurs, vous avez donné un nouvel et puissant appui à la foi obstinée et si belle de tous ceux qui, partout, tiennent leurs regards fixés sur les lumières de la France. »</p>
        <p>Citons encore ce bel hommage rendu à Jann Forteroche par François Mauriac, dans son Bloc-notes : « Elle est de ces êtres à qui tout excès aura été permis, et d'abord dans la témérité du soldat et du résistant, et qui aura gagné l'univers sans avoir perdu son âme. »</p>
        <p><small class="pull-right"><a href="https://wikipedia.com">Wikipedia</a> </small><br></p>
    </section>
</div>
<?php
    $content = ob_get_clean();
    require('Views/template.php');
?>
