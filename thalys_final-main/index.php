<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Jeu concours</title>
</head>


<body>
    <header>
        <div class="conteneur_logo">
            <a href="https://www.lesardentes.be/festival/fr" target="_blank"><img src="img/logo.png" class="logo_ardentes" width="" height="" alt="les_ardentes"></a>
        </div>
        <div class="conteneurPlaces">
            <div class="mes_informations" id="mes_informations">
                <p class="renseignements">
                    MES INFORMATIONS
                </p>
            </div>
        </div>

        <img src="img\THALYS-Logo_Encadré.png" alt="logo" class="log_thalys" width="" height="">
    </header>
    <div class="conteneurPlaces">
        <div class="places" id="places">
            <p class="accroche">2 PASS POUR LE FESTIVAL <br>LES ARDENTES, ÇA VOUS DIT?</p>
        </div>
    </div>

    <div class="conteneur">
        <form class="inscription" method="post" action="validation.php" name="ins">

            <!--Questionnaire-->
            <div id="page1">
                <fieldset class="questionnaire">

                    <legend class="description">
                        <p class="texte_groupe">
                            Sexion d’assaut, Megan Thee Stallion, Soso Maness, Damso, PNL,
                            un line-up de folie vous attend à partir du 7 juillet
                        </p>
                    </legend>

                    <p class="explications">Avec Thalys, tentez votre chance en répondant à ces questions :</p>
                    <!--Question 1-->
                    <p class="question1">
                        Parmi ces 3 destinations, laquelle n'est pas desservie par Thalys?
                    </p>

                    <label for="liege">
                        <input type="radio" name="ville" id="liege" value="liege" class="radio_button">
                        <div class="choix">
                            <p class="centre">Liege</p>
                        </div>
                    </label>
                    <label for="marseille">
                        <input type="radio" name="ville" id="marseille" value="marseille" class="radio_button">
                        <div class="choix">
                            <p class="centre">Marseille</p>
                        </div>
                    </label>
                    <label for="berlin">
                        <input type="radio" name="ville" id="berlin" value="berlin" class="radio_button">
                        <div class="choix">
                            <p class="centre">Berlin</p>
                        </div>
                    </label>

                    <!--Question 2-->
                    <label for="nb_participants">
                        <p class="question2">
                            D'après vous, combien de personnes participeront
                            à ce jeu entre le 21 et le 28 juin à minuit?
                        </p>

                        <input type="number" name="nb_participants" id="nb_participants" class="nb_participants">

                    </label>
                    <!--Question 3-->
                    <p class="question3">
                        Dites-nous la date à laquelle vous voudriez participer au festival :
                    </p>

                    <label for="jeudi">
                        <input type="radio" name="jour" id="jeudi" value="jeudi" class="radio_button">
                        <div class="choix">
                            <p class="centre">Jeudi 07/07</p>
                        </div>
                    </label>
                    <label for="vendredi">
                        <input type="radio" name="jour" id="vendredi" value="vendredi" class="radio_button">
                        <div class="choix">
                            <p class="centre">Vendredi 08/07</p>
                        </div>
                    </label>
                    <label for="samedi">
                        <input type="radio" name="jour" id="samedi" value="samedi" class="radio_button">
                        <div class="choix">
                            <p class="centre">Samedi 09/07</p>
                        </div>
                    </label>

                    <div class="textAlert" id="textAlert">
                        <p class="alert">Veuillez remplir tous les champs!!!</p>
                    </div>
                </fieldset>

                <!--Bouton valider-->
                <input type="button" value="VALIDER" name="Valider" id="valider" class="valider" onclick="p1TOp2()">
            </div>



            <!--Formulaire d'inscription-->
            <div id="page2">

                <p class="explications2">Veuillez renseigner les informations suivantes :</p>

                <div class="cadre_nom">
                    <label for="nom">
                        <p class="nom_prenom">Nom <span style="color: #c02634;">*</span></p>
                        <input type="text" name="nom" id="nom" class="entree_l1" placeholder="Dupont" required>
                    </label>
                </div>

                <div class="cadre_prenom">
                    <label for="prenom">
                        <p class="nom_prenom">Prénom <span style="color: #c02634;">*</span> </p>
                        <input type="text" name="prenom" id="prenom" class="entree_l1" placeholder="Angelique" required>
                    </label>
                </div>

                <label for="e-mail">
                    <p class="infos">E-mail <span style="color: #c02634;">*</span></p>
                    <input type="email" name="e-mail" id="e-mail" class="entree_l2-3" placeholder="Dupont" required>
                </label>

                <label for="num_thalys">
                    <p class="infos">N°Thalys <span style="color: #c02634;">*</span></p>
                    <input type="text" name="num_thalys" id="num_thalys" class="entree_l2-3" placeholder="30840601527374363" required>
                </label>

                <input type="submit" name="enregistrer" value="ENREGISTRER MA PARTICIPATION" class="enregistrer" id="enregistrer">

            </div>

        </form>

        </fieldset>
        <footer>
            <a href="https://www.thalys.com/be/fr " target="_blank"><img src="img/Bloc_thalys.png" alt="thalys" class="bloc_thalys" width="" height=""></a>
            <a href="https://www.thalys.com/sites/thalys.com/files/mtw/Ardentes/Règlement-Jeu-Concours-Festival-des-Ardentes-2022.pdf" class="reglement" target="_blank">RÈGLEMENT DU JEU</a> <br>
            <p class="mensions_legales">
                * Champs obligatoires
                <br><br>
                En validant votre inscription, vous reconnaissez avoir lu, compris et accepté le présent Règlement
                <br><br>
                La confidentialité de vos données personnelles nous tient particulièrement à coeur. Pour consulter notre
                politique de confidentialité en

                ligne, <a href="https://www.thalys.com/sites/thalys.com/files/legal/NEW/PrivacyPolicy_THI_FR.pdf" class="cliquez" target="_blank">cliquez ici</a>
            </p>
        </footer>
        <!--Encart PHP-->
    </div>
    <script src="main.js"></script>
</body>
</html>