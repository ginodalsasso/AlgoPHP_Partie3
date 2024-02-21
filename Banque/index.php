<?php

spl_autoload_register(function ($class_name){  //fonction permettant d'appeler mes différentes classes
    require $class_name . '.php';  //stipuler l'emplacement du dossier, si dans un dossier. laisser le fichier index à la raçine !
});

$p1 = new Titulaire ("Gino", "Dalsasso", "23-11-1993", "Lingolsheim");

$compte1 = new CompteBancaire("Compte Courant", 2000, "€", $p1);
$compte2 = new CompteBancaire("Livret A", 4000, "€", $p1);


$p1->afficherInformations();

echo "</br>";

$compte1->afficherInformations();
$compte2->afficherInformations();

echo "</br>";

$compte1->crediter(1000);           //vient créditer la valeur entre parenthèses grace à la fonction "crediter"
$compte1->afficherInformations();   //Infos du compte bancaire après crédit.
$compte1->debiter(750);             //vient débiter la valeur entre parenthèses grace à la fonction "debiter"
$compte1->afficherInformations();   //Infos du compte bancaire après débit.

echo "</br>";

$compte2->effectuerVirement($compte1, 250);  //Effectue un virement de 250€ du livret A ($compte2) vers le compte courant($compte1)

echo "</br>";

//Infos des compte bancaire après virement
$compte1->afficherInformations();           
$compte2->afficherInformations();