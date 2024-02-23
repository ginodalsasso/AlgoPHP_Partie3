<?php

class Role { 


    private string $nomPersonnage;      //ex Battman joué par différents acteurs selon le film   
    private array $casting;

    
    public function __construct (string $nomPersonnage){
        $this->nomPersonnage = $nomPersonnage;
        $this->casting = [];
    }

            //////////////////getters and setters///////////////////


    public function getNomPersonnage()
    {
        return $this->nomPersonnage;
    }

    public function setNomPersonnage($nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;

        return $this;
    }

    
    public function getCasting()
    {
        return $this->casting;
    }

    public function setCasting($casting)
    {
        $this->casting = $casting;

        return $this;
    }


        //////////////////getters and setters///////////////////
    public function addCasting(Casting $casting) {
        $this->casting[] = $casting;
    }


    public function afficherRole() {                 
        $result = "<h2>Role de $this</h2><ul>";  //affichera la liste des acteurs et films d'un rôle

        foreach($this->casting as $cast) {
            $result .= "<li>".$cast->getActeur()." ".$cast->getFilm()."</li>"; //va chercher dans l'objet casting l'acteur et ses films
        }

        $result .= "</ul>";
        return $result;
    }


    public function __toString(){
        return $this->nomPersonnage;
    }

}