<?php

class  Personne  { 


    public string $prenom;
    public string $nom;
    public string $sexe;
    public DateTime $dateNaissance;

    
    public function __construct (string $prenom, string $nom, string $sexe, string $dateNaissance){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime ($dateNaissance);
    }
}