<?php

class Acteur extends Personne {


    private array $casting;

    
    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance){
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        $this->casting = [];
    }

}