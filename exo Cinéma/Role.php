<?php

class Role { 


    private string $nomPersonnage;      //ex Battman joué par différents acteurs selon le film   
    private array $casting;

    
    public function __construct (string $nomPersonnage){
        $this->nomPersonnage = $nomPersonnage;
        $this->casting = [];
    }
}