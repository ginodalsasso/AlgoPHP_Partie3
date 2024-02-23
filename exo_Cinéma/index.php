<?php

spl_autoload_register(function ($class_name){  //fonction permettant d'appeler mes différentes classes
    require './'. $class_name . '.php';  //stipuler l'emplacement du dossier, si dans un dossier. laisser le fichier index à la raçine !
});


$realisateur1 = new Realisateur ("Steven", "Spielberg", "M", "18-12-1946");
$realisateur2 = new Realisateur ("YOu", "Too", "M", "18-12-1946");

$acteur1 = new Acteur ("Jim", "Carrey", "M", "17-01-1962");
$acteur2 = new Acteur ("Gino", "D", "M", "17-01-1962");
$acteur3 = new Acteur ("Romane", "BisD", "F", "17-01-1962");
$acteur4 = new Acteur ("Tony", "Pomme", "M", "17-01-1962");

$genre1 = new Genre ("Thriller");
$genre2 = new Genre ("Science-Fiction");
$genre3 = new Genre ("Action");
$genre4 = new Genre ("Comédie");

$film1 = new Film ("The purge", "2018", 60, $realisateur1, $genre1);
$film2 = new Film ("Transformers", "2007", 90, $realisateur1, $genre2);
$film3 = new Film ("The mask", "1990", 90, $realisateur1, $genre4);
$film4 = new Film ("Ace Ventura", "2007", 90, $realisateur1, $genre3);

$role1 = new Role("Personnage");
$role2 = new Role("Personnage 2");
$role3 = new Role("Personnage 3");
$role4 = new Role("Personnage 4");

$casting1 = new Casting($film1, $acteur1, $role1);
$casting2 = new Casting($film1, $acteur2, $role2);
$casting3 = new Casting($film4, $acteur1, $role2);
$casting4 = new Casting($film3, $acteur1, $role4);


echo $genre2->genreParFilm();

echo $film1->afficherInfos();  // affiche toute les infos du film

echo $acteur1->afficherFilmographie();

echo $acteur1->afficherInfos();

echo $role1->afficherRole();

