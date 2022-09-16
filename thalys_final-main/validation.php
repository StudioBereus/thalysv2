<?php
require_once 'connexion.php';
//Se connecter

//enregistrer les donnees du formulaire
if (isset($_POST['enregistrer'])) {
    if (

        //Ville
        //isset($_POST['liege']) || isset($_POST['marseille']) || isset($_POST['berlin']) &&
        isset($_POST['ville']) &&
        //Nombre de participants
        isset($_POST['nb_participants']) &&
        //Jour 
        //isset($_POST['jeudi']) || isset($_POST['vendredi']) || isset($_POST['samedi']) &&
        isset($_POST['jour']) &&
        //Nom
        isset($_POST['nom']) &&
        //Prenom
        isset($_POST['prenom']) &&
        //E-mail
        isset($_POST['e-mail']) &&
        //Numero Thalys
        isset($_POST['num_thalys'])



    ) {
        //Attribuer la valeur des champs et inputs a des variables
        $villeChoisie = $_POST['ville'];
        $nb_part = $_POST['nb_participants'];
        $dateChoisie = $_POST['jour'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['e-mail'];
        $thalys = $_POST['num_thalys'];



        //Faire la requete sql 


        $rq = 'INSERT INTO participants VALUES (id_participant, :nom, :prenom, :email, :thalys, :villeChoisie, :nb_part, :dateChoisie, NOW())';

        $state = $connection->prepare($rq);
        $state->bindParam(':nom', $nom, PDO::PARAM_STR);
        $state->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $state->bindParam(':email', $email, PDO::PARAM_STR);
        $state->bindParam(':thalys', $thalys, PDO::PARAM_STR);
        $state->bindParam(':villeChoisie', $villeChoisie, PDO::PARAM_STR);
        $state->bindParam(':nb_part', $nb_part, PDO::PARAM_INT);
        $state->bindParam(':dateChoisie', $dateChoisie, PDO::PARAM_STR);

        $state->execute();
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription validée</title>
    <link rel="stylesheet" href="styleFin.css">

</head>
<br><br><br><br>

<header>
   <a href="https://www.thalys.com/be/fr" target="_blank"><img src="img\THALYS-Logo_Encadré.png" alt="logo thalys" id="logo_thalys"></a>
</header>
<body>
    <fieldset class="pageFin">
    <div id="page3">
        <p class="valid_part">
            Votre participation a bien été prise en compte. Merci!
        </p>
        <br>
        <a href="https://www.thalys.com/be/fr" target="_blank"><input type="button" value="RETOUR À L'ACCUEIL" class="retour"></a>

    </div>
    
    
    </fieldset >
<br><br>
    
    
    <div id="cont_img">
        <a href="https://www.thalys.com/be/fr"><img src="img\Bloc_marque.jpg" alt="bloc marque" id="imgBas"></a>
    </div>
    
    <script src="main.js"></script>
</body>
</html>