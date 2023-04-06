<!doctype html>
<html lang="fr">
    <head>

        <title>Nolark</title>
        <meta charset="UTF-8" />
        <meta name="author" content="Azali Fidaly ABDILLAH" />
        <link rel="stylesheet" href="../css/casques.css" />
        <link rel="stylesheet" href="../css/Simulateur.css" />
        <script src="../js/remuneration.js"></script>

    </head>
    <body>
        <header>
             
            <nav>
                <ul>
                 <li><a href="../index.php">Accueil</a></li>
                  <?php
                  include('../includes/lienspages.inc_1.php');
                  ?>
                </ul>
            </nav>        
        </header>
        
        <section id="formulaire">
            <form id="form_simulateur">
                <fieldset id="sim">
                    <legend id="lgdSim">Simulateur de rémunération</legend>     
                    <label>Modèle de casque:</label>
                    <br>
                    <fieldset class="modele" id="xspirit">
                        <legend>X-Spirit</legend>   
                        <img src="../images/casques/cross/Hornet-ds-anthracite-mat.jpg" width="80%" height="80%" alt="Casque X-Spirit"/>
                        <label for="i_ventes_xspirit">Nombre de ventes :</label> <input type="number" name="i_ventes_xspirit" id="i_ventes_xspirit" min="0" required value="0" />
                    </fieldset>  
                    <fieldset class="modele" id="multitec">
                        <legend>Multitec</legend>   
                        <img src="../images/casques/piste/skyline-block-blanc-bleu.jpg" width="80%" height="80%" alt="Casque X-Spirit"/>
                        <label for="i_ventes_multitec">Nombre de ventes :</label> <input type="number" name="i_ventes_multitec" id="i_ventes_multitec" min="0" required value="0"/>                                          
                    </fieldset> 
                    <fieldset class="modele" id="s20">
                        <legend>S 20</legend>   
                        <img src="../images/casques/route/casque-scorpion-exo-1000-air--twister-noir-mat.jpg" width="80%" height="80%" alt="Casque X-Spirit"/>
                        <label for="i_ventes_s20">Nombre de ventes :</label> <input type="number" name="i_ventes_s20" id="i_ventes_s20" min="0" required value="0"/>                         
                    </fieldset> 
                    <label for="i_anciennete">Votre ancienneté :</label> <input type="number" name="i_anciennete" id="i_anciennete" min="0" max="50" value="0" required />
                    <br>
                    <label for="i_kilometres">Kilomètres parcourus (mensuel) :</label> <input type="number" name="i_kilometres" id="i_kilometres" min="0" max="9999" value="0" required />
                    <br>
                    <button type="button" id="btnEstimer">Estimer la rémunération</button>
                    <fieldset id="estimation">
                        <legend>ESTIMATION</legend>
                        <label  id="lblEstimation">...</label>
                    </fieldset>
                </fieldset>
            </form>
        </section>
        <footer><p>&copy;2023 Nolark - Créé par <a href="mailto:to.ci@orange.fr">Azali Fidaly ABDILLAH </a><p></footer>
        <script src="../js/remuneration.js"></script>
        <script src="../js/Nolark.js"></script>
    </body>
</html>