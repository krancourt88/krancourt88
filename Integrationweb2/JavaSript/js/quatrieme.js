//Déclaration des variables
var nom;
var age;
var jours;

//Lecture au clavier (l'usager entre une valeur)
nom = prompt("Veuillez entrer votre nom svp : ");
age = Number(prompt("Veuillez entrer votre age svp : "));

//Les calculs
jours = 365 / age;

//Les affichages
alert("Vous"+ nom + "Le nombre de jours vécu dans votre vie est de : " + jours);