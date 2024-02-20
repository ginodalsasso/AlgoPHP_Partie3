<?php

class Realisateur extends Personne{ 


    private array $films;

    
    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance){
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        $this->films = [];
    }    
}