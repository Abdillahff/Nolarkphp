<!doctype html>
<html lang="fr">
    <head>
        <title> Nolark</title>
        <meta charset="UTF-8" />
        <meta name="author" content="Azali Fidaly ABDILLAH" />
        <link rel="stylesheet" href="css/styles.css" />
        <script src="../projet/css/monCode.js"></script>
    </head>
    <body>
         
        <header>
            <nav>
                <ul>
                <li><a href="index.php">Accueil</a></li>
                  <?php
                  include('includes/lienspages.inc.php');
                  ?>
                </ul>
            </nav>
        </header>
        <section id="principal">
            <article>
                <img src="images/post-it.png" alt="Post-It : Penser à rentrer en vie" />
                <p>Au delà de l'obligation légale, le port d'un casque est le garant de votre sécurité. Le choix de votre casque doit se faire en fonction de vos besoins (route, cross, piste...).</p>
                <p>Spécialiste reconnu dans l'univers de la sécurité du deux-roues, Nolark vous propose des milliers de modèles de casques disponibles au travers de plus de 50 marques. Vous trouverez ici tous les types de casques moto : jet, intégral, modulable, transformable, piste, cross ou encore un large choix de casques moto enfant (taille et poids spécialement adaptés).</p>
                <p>Nolark c'est également la disponibilité de toutes les couleurs et matières et ce, pour toutes les bourses.</p>
                <p>Une question ? Un conseil ? Nos conseillers sont là pour vous aiguiller afin de trouver le modèle qui correspond à vos besoins.</p>
                <p>Nolark n'est pas seulement un magasin de casques, c'est avant tout une équipe de passionnés qui sélectionnent pour vous les meilleurs casques moto afin de répondre au mieux à vos attentes.</p>
            </article>
            <aside>
                <img src="images/conseilcasque01.jpg" alt="Conseil du mois : Casque Cross" />
                <p>Pour le style: Furious replica</p>
                <img src="images/conseilcasque02.jpg" alt="Conseil du mois : Intgéral Piste" />
                <p>Pour le confort: Stars racing</p>
            </aside>
        </section>
        <section id="sectionthema">
            <h1>Catégories les plus populaires</h1>
            <article id="gauche"><a href="pages/route.html">Route</a></article>
            <article id="milieu"><a href="pages/cross.html">Cross</a></article>
            <article id="droite"><a href="pages/piste.html">Piste</a></article>
        </section>
        <footer><p>&copy;2023 Nolark - Créé par <a href="mailto:jose.gil@ac-nice.fr">Azali Fidaly ABDILLAH</a><p>
            <p> Le <?php echo date ('d/m/y   h:i:s'); ?></p>
        </footer>

            <script src="../js/javascript.js"></script>
    </body>
</html>