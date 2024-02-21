<?php

spl_autoload_register(function ($class_name){  //fonction permettant d'appeler mes différentes classes
    require './'. $class_name . '.php';  //stipuler l'emplacement du dossier, si dans un dossier. laisser le fichier index à la raçine !
});


$realisateur1 = new Realisateur ("Steven", "Spielberg", "M", "18-12-1946");

$acteur1 = new Acteur ("Jim", "Carrey", "M", "17-01-1962");

$genre1 = new Genre ("Thriller");

$genre2 = new Genre ("Science-Fiction");

$film1 = new Film ("The purge", "2018", 60, $realisateur1, $genre1);

$film2 = new Film ("Transformers", "2007", 90, $realisateur1, $genre2);



echo $realisateur1->filmographie();

echo $genre2->genreParFilm();