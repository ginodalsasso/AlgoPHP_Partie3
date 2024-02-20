<?php

spl_autoload_register(function ($class_name){  //fonction permettant d'appeler mes différentes classes
    require './'. $class_name . '.php';  //stipuler l'emplacement du dossier, si dans un dossier. laisser le fichier index à la raçine !
});


$auteur1 = new Auteur ("Dan", "Brown");
$livre1 = new Livre ("Anges et démons", "450", "2001", 18.99, $auteur1);
$livre2 = new Livre ("Deception point", "550", "2011", 20.50, $auteur1);
$livre3 = new Livre ("Da Vinci Code", "475", "2008", 17, $auteur1);
$livre4 = new Livre ("Forteresse digitale", "620", "2000", 15, $auteur1);


$livre1->getInfos();

echo "</br>";

echo $auteur1->bibliographie();
echo $auteur1-> calculPrix();