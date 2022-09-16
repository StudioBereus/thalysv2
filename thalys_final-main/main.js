//Pages 
var page1 = document.getElementById('page1');
var page2 = document.getElementById('page2');
var page3 = document.getElementById('page3');

//Divs 
var mes_informations = document.getElementById('mes_informations');
var places = document.getElementById('places');
var textAlert = document.getElementById('textAlert');

//Inputs 
var nb_participants = document.getElementById('nb_participants')
var check1 = false;
var check2= false;
let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');
let email = document.getElementById('e-mail');
let num_thalys = document.getElementById('num_thalys');
let validInscription = document.getElementById('enregistrer');

//Dates 
let dateFin = new Date("2022-12-14 05:00:00");
let dateJour = new Date();

//Fonction pour changer de page 
function p1TOp2() {
    //Vérifier que la ville a été sélectionnée
    if ((!document.getElementById('jeudi').checked) && !document.getElementById('vendredi').checked && !document.getElementById('samedi').checked) {
        check2 = false;
    }
    else {
        check2 = true;
    }
    //Vérifier que la date a été sélectionnée
    if ((!document.getElementById('liege').checked) && !document.getElementById('marseille').checked && !document.getElementById('berlin').checked) {
        check1 = false;
    }
    else {
        check1 = true;
    }
     //Si tous les champs sont remplis 
    if (nb_participants.value != '' && check1 && check2) {
        //Faire apparaitre la deuxieme partie de la page
        page2.style.display = 'block';
        mes_informations.style.display = 'block';

        //faire disparaitre la premiere partie de la page 
        page1.style.display = 'none';
        places.style.display = 'none';
    } else {
        //Sinon faire apparaitre le message d'alerte
        textAlert.style.display = 'block';
    }
}


function checkDate(){
    if (dateFin < dateJour) {
        document.location.href = "http://localhost/xampp/oc_festival/fin_concours.php";
    }
}
checkDate();

