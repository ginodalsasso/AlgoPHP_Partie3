<?php

spl_autoload_register(function ($class_name){  //fonction permettant d'appeler mes différentes classes
    require './'. $class_name . '.php';  //stipuler l'emplacement du dossier, si dans un dossier. laisser le fichier index à la raçine !
});


$Joueur1 = new Joueur ("Kylian", "Mbappé",  "10-10-2002", "France");
$Joueur2 = new Joueur ("Kylian", "Mbappé",  "10-10-2002", "France");
$Joueur3 = new Joueur ("Kylian", "Mbappé",  "10-10-2002", "France");
$Joueur4 = new Joueur ("Kylian", "Mbappé",  "10-10-2002", "France");
