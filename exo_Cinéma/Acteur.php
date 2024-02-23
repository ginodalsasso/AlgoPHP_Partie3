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
    public function afficherFilmographie() {                 //nous affichera la filmographie de l'acteur ainsi que les roles joués
        $result = "<h2>Filmographie de $this</h2><ul>";

        foreach($this->casting as $cast) {
            $result .= "<li>".$cast->getFilm()." ".$cast->getRole()."</li>";        //va chercher dans l'objet casting le film et le role
        }

        $result .= "</ul>";
        return $result;
    }


    public function afficherInfos(){
        $result = "<h2>Nom et prénom de l'acteur :" .$this. "</h2>";
        $result .= "Sexe : ". $this->sexe ."<br>";
        $result .= "Date de naissance : ". $this->getDateNaissance()->format("d-m-Y")."<br>";
        $result .= $this->afficherFilmographie();
        return $result; 
    }


    public function addCasting(Casting $casting) {
        $this->casting[] = $casting;
    }


}


