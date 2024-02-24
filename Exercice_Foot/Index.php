<?php

spl_autoload_register(function ($class_name){  //fonction permettant d'appeler mes différentes classes
    require './'. $class_name . '.php';  //stipuler l'emplacement du dossier, si dans un dossier. laisser le fichier index à la raçine !
});

$pays1 = new Pays ("France");
$pays2 = new Pays ("Argentine");
$pays3 = new Pays ("Portugal");
$pays4 = new Pays ("Angleterre");
$pays5 = new Pays ("Espagne");
$pays6 = new Pays ("Italie");


$joueur1 = new Joueur ("Kylian", "Mbappé",  "20-12-1998", $pays1);
$joueur2 = new Joueur ("Lionel", "Messi",  "24-06-1987", $pays2);
$joueur3 = new Joueur ("Cristiano", "Ronaldo",  "05-02-1985", $pays3);
$joueur4 = new Joueur ("Wayne", "Rooney",  "24-10-1985", $pays4);



$club1 = new Club ("Manchester United", $pays4);
$club2 = new Club ("PSG", $pays1);
$club3 = new Club ("Real Madrid", $pays5);

$club5 = new Club ("FC Barcelone", $pays5);
$club6 = new Club ("Juventus", $pays6);

$contrat1 = new Contrat ($joueur1, $club2, 2017);
$contrat2= new Contrat ($joueur2, $club2, 2019);
$contrat3 = new Contrat ($joueur2, $club5, 2015);
$contrat4 = new Contrat ($joueur3, $club1, 2002);
$contrat5 = new Contrat ($joueur3, $club3, 2009);
$contrat6 = new Contrat ($joueur3, $club6, 2018);
$contrat7 = new Contrat ($joueur4, $club1, 2004);

echo $pays1 -> afficherClubs();
echo $pays2 -> afficherClubs();
echo $pays5 -> afficherClubs();
echo $pays4 -> afficherClubs();