/**
 * Created by Shany on 2019-07-11.
 */

//Lire un nombre et afficher le carré et le cube de ce nombre.

    //Déclaration des variables
var heure;
var salaire;
var paie;

//Lecture au clavier (l'usager entre une valeur)
heure = Number(prompt("Veuillez entrer vos heures svp : "));
salaire = Number(prompt("Veuillez entrer votre salaire svp : "));

//Les calculs variable
paie = heure * salaire;

//Les affichages
alert("Votre paie est de " + paie);

