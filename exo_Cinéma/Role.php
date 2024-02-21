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
        $this->castings[] = $casting;
    }
}