<?php

class Realisateur extends Personne{ 


    private array $films;
    
    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance){
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        $this->films = [];
    } 

    
////////////////////////////////////////////////////////////


    public function getFilms()
    {
        return $this->films;
    }

    public function setFilms($films)
    {
        $this->films = $films;
        return $this;
    }

    
////////////////////////////////////////////////////////////


    public function addFilm(Film $film) {
        $this->films[] = $film;
    }

    
    public function filmographie(){                 //me listera la filmographie d'un réalisateur
        $result = "Filmographie de $this:</br>";
        
        foreach ($this->films as $film){
            $result .= $film ."</br>";
        }
        return $result;
    }
}