<?php if (empty(session_id())) session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleFin.css">
    <title>Liste des participants</title>
</head>

<body>


    <?php
    include 'connexion.php';


    $afficheForm = true;



    if (isset($_POST['connexion'])) {

        if (isset($_POST["ide"]) && !empty($_POST["ide"]) && isset($_POST["mdp"]) && !empty($_POST["mdp"])) {


            $rq = "SELECT * FROM compte  WHERE identifiant = ? AND mot_de_passe = ?";
            $state = $connection->prepare($rq);
            $state->bindParam(1, $_POST['ide'], PDO::PARAM_STR);
            $state->bindParam(2, $_POST['mdp'], PDO::PARAM_STR);
            $state->execute();
            if ($state->rowCount() == 1) {

                $afficheForm = false;
                $rq = "SELECT * FROM participants ORDER BY inscription DESC";
                echo '<table id="liste">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>N°Thalys</th>
                        <th>Ville choisie</th>
                        <th>Nombre donné</th>
                        <th>Date choisie</th>
                        <th>Date d\'inscription</th>
                    </tr>
                </thead>
                <tbody>';
                $state = $connection->prepare($rq);
                $state->execute(array());
                $resultat = $state->fetchAll();

                foreach ($resultat as $key => $ligne) {
                    echo '
                    <tr>
                        <td>' . $resultat[$key]['id_participant'] . '</td>
                        <td>' . $resultat[$key]["nom"] . '</td>
                        <td>' . $resultat[$key]["prenom"] . '</td>
                        <td>' . $resultat[$key]["email"] . '</td>
                        <td>' . $resultat[$key]["num_thalys"] . '</td>
                        <td>' . $resultat[$key]["ville"] . '</td>
                        <td>' . $resultat[$key]["nb_participants"] . '</td>
                        <td>' . $resultat[$key]["date_choisie"] . '</td>
                        <td>' . $resultat[$key]["inscription"] . '</td>
                    </tr>';
                }
                echo '</tbody>
                </table>';

                echo '<div class="col-md-12 head">
                <div class="export">
                    <a href="dlCSV.php" class="export"><i class="dwn"></i>EXPORT</a>
                </div>
            </div>';
            } else {
                echo "<p class='non'>Connexion impossible, login ou mot de passe erroné</p>";
            }
        }
    }

    ?>

    <?php
    if ($afficheForm == true) {
    ?>


        <div id="espace_connexion">
            <fieldset class="connect">
                <legend>Espace admin</legend>
                <form action="liste.php" method="POST">
                    <div class="identification">
                        <label for="identifiant">
                            <p class="ident">Identifiant</p>
                            <input type="text" name="ide" id="ide" class="identification">
                        </label>
                    </div>

                    <div class="identification">
                        <label for="mdp">
                            <p class="ident">Mot de passe</p>
                            <input type="password" name="mdp" id="mdp" class="identification">
                        </label>
                    </div>
                    <br>
                    <input type="submit" value="SE CONNECTER" name="connexion" id="connexion" class="se_connecter">
                    <br>
                </form>

            </fieldset>

        </div>

    <?php
    }
    ?>




</body>

</html>