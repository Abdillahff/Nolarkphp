﻿<!doctype html>
<html lang="fr">
    <head>
        <title>Nolark</title>
        <meta charset="UTF-8" />
        <meta name="author" content="Azali Fidaly ABDILLAH" />
        <link rel="stylesheet" href="../css/styles.css" />
        <link rel="stylesheet" href="../css/contact.css" />
        <script src="../js/Nolark.js"></script>
       

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
        
        <br />
        <h1>Nous contacter :</h1>
        <section id="formulaire">
            <form id="form_contact" name="form_contact" action="http://btssio.bonaparte.free.fr/testforms.php">
                <fieldset id="coordo">
                    <legend>Pour mieux vous connaître</legend>
                    <div><label for="i_nom">Votre nom :</label> <input type="text" name="i_nom" id="i_nom" size="35" pattern="^[a-zA-Z\s\-]+$" required /><div class="input-validation"></div></div>
                    <div><label for="i_prenom">Votre prénom :</label> <input type="text" name="i_prenom" id="i_prenom" size="35" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]+$" required /><div class="input-validation"></div></div>
                    <div><label for="i_email">Votre e-mail :</label> <input type="email" name="i_email" id="i_email" size="35" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required /><div class="input-validation"></div></div>
                    <div><label for="i_url">Votre url :</label> <input type="url" name="i_url" id="i_url" size="35" pattern="https?://.+" required /><div class="input-validation"></div></div>
                    <p>
                        <label for="lst_typeclient">Vous êtes : </label>
                        <select name="lst_typeclient" id="lst_typeclient">
                            <option value="1">Étudiant</option>
                            <option value="2">Salarié du privé</option>
                            <option value="3">Salarié du public</option>
                            <option value="4">Chef d'entreprise</option>
                            <option value="5">Journaliste</option>
                            <option value="6">Professionnel(le) du casque</option>
                            <option value="99">Autre statut</option>
                        </select>
                    </p>
                    <p>
                        <label>Date de naissance : </label>
                        <input type="number" name="num_jour" id="num_jour" min="1" max="31" /> 
                        / <input type="number" name="num_mois" id="num_mois" min="1" max="12" />
                        / <input type="number" name="num_annee" id="num_annee" min="1900" max="2013" />
                    </p>
                    <fieldset id="marques">
                        <legend>Vos marques préférés</legend>
                        <table>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_agv" value="agv"><label for="chk_agv">agv</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_airoh" value="airoh"><label for="chk_airoh">airoh</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_arai" value="arai"><label for="chk_arai">araï</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_bell" value="bell"><label for="chk_bell">bell</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_bering" value="bering"><label for="chk_bering">bering</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_bultaco" value="bultaco"><label for="chk_bultaco">bultaco</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_caberg" value="caberg"><label for="chk_caberg">caberg</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_cameron" value="cameron"><label for="chk_cameron">cameron</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_chaft" value="chaft"><label for="chk_chaft">chaft</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_darts" value="darts"><label for="chk_darts">darts</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_dg" value="dg"><label for="chk_dg">dg</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_diesel" value="diesel"><label for="chk_diesel">diesel</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_falco" value="falco"><label for="chk_falco">falco</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_fox" value="fox"><label for="chk_fox">fox</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_furygan" value="furygan"><label for="chk_furygan">furygan</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_givi" value="givi"><label for="chk_givi">givi</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_gpa" value="gpa"><label for="chk_gpa">gpa</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_grex" value="grex"><label for="chk_grex">grex</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_helstons" value="helstons"><label for="chk_helstons">helstons</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_hjc" value="hjc"><label for="chk_hjc">hjc</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_hokkey" value="hokkey"><label for="chk_hokkey">hokkey</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_ica" value="ica"><label for="chk_ica">ica</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_icon" value="icon"><label for="chk_icon">icon</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_ixon" value="ixon"><label for="chk_ixon">ixon</label></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_kenny" value="kenny"><label for="chk_kenny">kenny</label></td>
                                <td><input type="checkbox" name="chk_marques[]" id="chk_knox" value="knox"><label for="chk_icon">knox</label></td>
                                <td></td>
                            </tr>     
                        </table>
                    </fieldset>
                    <p>
                        <label>Votre couleur préférée : </label>
                        <input type="color" name="col_couleur" id="col_couleur" value="#b21617" />
                    </p>
                </fieldset>
                <fieldset>
                    <legend>Motif du contact</legend>
                    <p><input type="radio" name="rd_motif" value="deminfo" id="rd_deminfo" /> <label for="rd_deminfo">Demande d'information</label></p>
                    <p><input type="radio" name="rd_motif" value="reclam" id="rd_reclam" /> <label for="rd_reclam">Réclamation</label></p>
                    <p><input type="radio" name="rd_motif" value="satis" id="rd_satis" /> <label for="rd_satis">Satisfaction</label></p>
                    <p><input type="radio" name="rd_motif" value="suivi" id="rd_suivi" /> <label for="rd_suivi">Suivi de commande</label></p>
                    <p><input type="radio" name="rd_motif" value="pub" id="rd_pub" /> <label for="rd_pub">Publicité</label></p>
                    <p><input type="radio" name="rd_motif" value="autre" id="rd_autre" /> <label for="rd_autre">Autre...</label></p>
                    <p><label for="area_precisions">Si "Autre", veuillez préciser :</label><br /><textarea name="area_precisions" id="area_precisions" cols="35" rows="10"></textarea></p>
                </fieldset>
                <p id="controles"><input id="btn_envoyer" type="button" name="btn_envoyer" value="Envoyer votre demande de contact" /> <input type="reset" name="rst_annuler" value="Effacer les réponses" /></p>
            </form>
        </section>
        <div id="vide"></div>
        <footer><p>&copy;2023 Nolark - Créé par <a href="mailto:jose.gil@ac-nice.fr">Azali Fidaly ABDILLAH</a><p></footer>
    </body>
</html>