<?php

class Acteur extends Personne {


    private array $casting;

    
    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance){
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        $this->casting = [];
    }

//////////////////getters and setters///////////////////


    public function getCasting()
    {
        return $this->casting;
    }

    public function setCasting($casting)
    {
        $this->casting = $casting;

        return $this;
    }


////////////////////////////////////////////////////////////


    public function addCasting(Casting $casting) {
        $this->castings[] = $casting;
    }


    
    public function filmographie(){
        $result = "Filmographie de $this:</br>";
        
        foreach ($this->films as $film){
            $result .= $film ."</br>";
        }
        return $result;
    }
}


